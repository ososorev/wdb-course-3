const express = require('express');
const router = express.Router();

router.use('/users', require('./api/index'));

module.exports = router;