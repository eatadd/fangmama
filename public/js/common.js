
(function (global) {
    function utilsSdk() {
        var that = this;
        this.init = function () {

        };
        this.apiUrl = 'http://127.0.0.1:8000/request/request';
        this.domain = 'http://app.fangmama.com';
        this.domain_address = 'http://api.app.fangmama.com/';
        this.img_domain = 'http://api.app.fangmama.com/';

        // 猫人服务器
        // this.domain = 'http://fmm.onlyjune.com';
        // this.domain_address = 'http://api.fmm.onlyjune.com/';
        // this.img_domain = 'http://fmm.onlyjune.com/';

        this.onLine = function () {
            return window.navigator.onLine == true ? true : false;
        };
        this.closeWindows = function(){
            window.close();
        };

        //检测网址是否合法
        this.checkURL = function (URL) {
            var Expression = /http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
            var objExp = new RegExp(Expression);
            if (objExp.test(URL) == true) {
                return true;
            } else {
                return false;
            }
        };
        //ajax请求封装
        this.ajax = function (params) {
            params = params || {};
            params.data = params.data || {};
            params.method = params.method || 'POST';
            params.success = params.success || function () {
            };
            params.error = params.error || function () {
            };
            let access_tokens = JSON.parse(localStorage.getItem("access_tokens_tp")) || {};
            params.data.access_token = access_tokens.access_token || '';
            let apiUrl = params.apiUrl ? params.apiUrl : that.apiUrl;
            console.log('请求参数',params);
            axios({
                method: params.method,
                url: apiUrl,
                data: params.data,
            }).then(function (res) {
                res.status == 200 ? params.success(res.data) : params.error(res);
                if(res.data.data.code=='-2'){
                    setTimeout(function () {
                        window.top.postMessage({
                            type:4,
                            data:{

                            }
                        },'*');
                    },2000);
                }
                if(res.data.error== 401){
                    var access_token = JSON.parse(localStorage.getItem("access_tokens_tp")) || {};
                    access_token.expires = access_token.expires || 0;
                    if (access_token.expires < (new Date()).getTime() || access_token.expires==0) {
                        that.accessToken(params);
                    }
                }
            }).catch(function (error) {
                console.log('axios:' + error);
                var access_token = JSON.parse(localStorage.getItem("access_tokens_tp")) || {};
                access_token.expires = access_token.expires || 0;
                if (access_token.expires < (new Date()).getTime() || access_token.expires==0) {
                    that.accessToken(params);
                }
            });
        };

        this.accessToken = function (params) {
            axios({
                method: 'POST',
                url: that.apiUrl,
                data: {
                    url:'accessToken',
                    client_id:20882088,
                    secret:'nGk5R2wrnZqQ02bed29rjzax1QWRIu1O'
                },
            }) .then(function (response) {
                    // that.access_tokens = response.data.access_token;
                    response.data.expires= (response.data.expires - 22000) + ((new Date()).getTime());
                    localStorage.setItem("access_tokens_tp",JSON.stringify(response.data));
                    console.log('返回',response.data);
                    if(params){
                        // that.ajax(params);
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        };

        var access_token = JSON.parse(localStorage.getItem("access_tokens_tp")) || {};
        access_token.expires = access_token.expires || 0;
        if (access_token.expires < (new Date()).getTime() || access_token.expires==0) {
            that.accessToken();
        }
    }

    global.utils = new utilsSdk();
})(window);
