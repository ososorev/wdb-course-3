const mongoose = require('mongoose');
var bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');

const { Schema } = mongoose;

const UsersSchema = new Schema({
    email: String,
    hash: String,
    salt: String,
});

//var hash = bcrypt.hashSync('bacon', 8);

UsersSchema.methods.setPassword = function (password) {
    //const salt = bcrypt.genSaltSync(10);
    //const generatedHash = bcrypt.hashSync("B4c0/\/", salt);

    //this.hash = generatedHash;

    bcrypt.genSalt(10, function(err, salt) {
        bcrypt.hash("b4c0/\/", salt, function (err, generatedHash) {
            this.hash = generatedHash;
    });
});
};

UsersSchema.methods.validatePassword = function (password) {
    bcrypt.compare("B4c0/\/", hash, function(err, res) {
        return this.hash === true;
    });
};

UsersSchema.methods.generateJWT = function () {
    const today = new Date();
    const expirationDate = new Date(today);
    expirationDate.setDate(today.getDate() + 60);

    return jwt.sign({
        email: this.email,
        id: this._id,
        exp: parseInt(expirationDate.getTime() / 1000, 10),
    }, 'secret');
}

UsersSchema.methods.toAuthJSON = function () {
    return {
        _id: this._id,
        email: this.email,
        token: this.generateJWT(),
    };
};

mongoose.model('Users', UsersSchema);