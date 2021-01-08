(function (global) {
    function modelSdk(modelName) {
        let that = this;
        that.modelName = modelName;
        this.init = function () {
            that.model = require('./model/' + that.modelName + '.js');
            return that.modelName ? new that.model() : false;
        }

    }

    global.model = function (modelName) {
        return new modelSdk(modelName).init();
    }
    global.db = require('./think/db.js');

})(window);
