const express = require('express');

const bodyParser = require('body-parser');

const { checkSchema, validationResult } = require('express-validator/check');


const porta = 3000;
const server = express();

const USUARIOS = [
    { id: 1, nome: 'diogo', sobrenome: 'vanderlan' },
    { id: 2, nome: 'joziel', sobrenome: 'alfa' },
    { id: 3, nome: 'gustavo', sobrenome: 'cs' },
];

server.use(bodyParser.json());
server.use(bodyParser.urlencoded({ extended: false }));

server.use((request, response, next) => {
    const { token } = request.query;
    if (token === 'super-secreto') {
        next();
    } else {
        response.status(403).send('Acesso não permitido.');
    }
});

server.get('/usuarios', (Request, Response) => {
    Response.status(200).json(USUARIOS)
});

server.get('/usuarios/:usuariosID', checkSchema({
    usuariosID: {
        in: 'params',
        isInt: {
            options: { min: 1 }
        },
        toInt: true,
        errorMessage: 'informe o id do usuario'
    }
}),
    (Request, Response) => {

        const errors = validationResult(Request);
        if (!errors.isEmpty()) {
            Response.status(422).json({
                errors: errors.array()

            });
            return;
        }
        const usuariosID = Request.params.usuariosID
        // const { usuariosID } = request.params;

        const usuariosEncontrado = USUARIOS.find((usuarios) =>
            usuarios.id === parseInt(usuariosID))
        if (!usuariosEncontrado) {
            Response.status(404).send('Usuario nao encontrado');
        } else {
            Response.status(200).json(usuariosEncontrado);
        }
    });
server.post('/usuarios', checkSchema({
    nome: {
        in: 'body',
        isString: true,
        isLength: {
            options: { min: 1 }

        },
        trim: true,
        errorMessage: 'informe o nome do usuário.'
    },

    profissao: {
        in: 'body',
        optional: true,
        isString: true,
        isLength: {
            options: { min: 1 }

        },
        trim: true,
        errorMessage: 'informe a profição .'
    }
}), (request, response) => {
    // let body = '';
    // request.on('data', (chunk) => { body += chunk;
    // })
    // request.on('end', () => {
    //     const usuario = JSON.parse(body);
    //     usuario.id = USUARIOS.length + 1;
    //     USUARIOS.push(usuario);
    //     //response.status(201).send('Usuarios incluido com sucesso.')
    //     response.status(201).json(usuario)
    // })
    const errors = validationResult(request);
    if (!errors.isEmpty()) {
        response.status(422).json({
            errors: errors.array()

        });
        return;
    }
    const { body } = request;
    const usuarios = {
        id: USUARIOS.length + 1,
        nome: body.nome,
        sobrenome: body.sobrenome,
    }
    USUARIOS.push(usuarios);
    response.status(201).json(usuarios)

});

server.listen(porta, () => {
    console.log('Servidor rodando na porta:', porta);
})