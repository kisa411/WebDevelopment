var configValues = require('./config');
// ./ means that it's local - will get the config.json file

module.exports = {
    getDbConnectionString: function() {
        return `mongodb://${configValues.uname}:${configValues.pwd}@ds131432.mlab.com:31432/nodetodo`;
    }
}
