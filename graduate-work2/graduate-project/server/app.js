'use strict';
var http = require('http');
var bodyParser = require("body-parser");
var express = require('express');
var mongoose = require('mongoose');

const path = require('path');
const session = require('express-session');
const cors = require('cors');
const errorHandler = require('errorhandler');


var jsonParser = bodyParser.json();

mongoose.promise = global.Promise;

const isProduction = process.env.NODE_ENV === 'production';

var Schema = mongoose.Schema;

var app = express();

app.use(cors());
app.use(require('morgan')('dev'));
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, 'public')));
app.use(session({ secret: 'passport-tutorial', cookie: { maxAge: 60000 }, resave: false, saveUninitialized: false }));

if (!isProduction) {
    app.use(errorHandler());
}

app.use(function (req, res, next) {
   res.header("Access-Control-Allow-Origin", "*");
   res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
   next();
});

var ObjectId = mongoose.Schema.Types.ObjectId;

var schemaName = new Schema({
    userId: ObjectId,
    userName: String,
    userPassword: String,
    userEmail: String
}, {
    collection: 'users'
});

//var Model = mongoose.model('.models/Users', schemaName);

mongoose.connect('mongodb://localhost:27017/usersdb');
mongoose.set('debug', true);

require('../models/Users');
require('../config/passport');
app.use(require('../routes'));

//Error handlers & middlewares
if (!isProduction) {
    app.use((err, req, res, next) => {
        res.status(500).json({
            errors: {
                message: err.message,
                error: err
            }
        });
    });
}

app.use((err, req, res, next) => {
    res.status(err.status || 500);

    console.log('Hello Node.js')

    res.json({
        errors: {
            message: err.message,
            error: {}
        }
    });
});


var port = process.env.PORT || 1338;
app.listen(port, function () {
    // console.log('Node.js listening on port ' + port);
});

// app.post('/user', jsonParser, function (req, res) {
//    var user = req.body;

//    var savedata = new Model({

//        'userName': user.userName,
//        'userPassword': user.userPassword,
//        'userEmail': user.userPassword

//    }).save(function (err, result) {
//        if (err) res.status(500);

//        if (result) {
//            res.json(result);
//        }
//    })
// })