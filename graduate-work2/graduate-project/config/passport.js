
const mongoose = require('mongoose');
const passport = require('passport');
const LocalStrategy = require('passport-local');

const Users = mongoose.model('Users');

passport.use(new LocalStrategy({
    usernameField: 'user[email]',
    //usernameField: '[name]',
    passwordField: 'user[password]'
    //emailField: '[email]',
    //passwordField: '[password]'
}, (email, password, done) => {
    Users.findOne({ email })
        .then((user) => {
            if (!user || !user.validatePassword(password)) {
                return done(null, false, { errors: { 'email or password': 'is invalid' } });
            }

            return done(null, user);
        }).catch(done);
}));

//app.post('/user', jsonParser, function (req, res) {
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
//})