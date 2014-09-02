function ApiConnector(){
    // this.BASE = "https://localhost/~ddcjoshuad/UVMRecruiter/api";
    // for proxying local requests to the VM
    this.PROXYBASE = "";
    this.BASE = window.site_url+"api";
    this.user = {};
    this.user['id'] = "1" ;
    this.user['token'] = "planner";
    this.user['is_confirmed'] = true;

    // performs the ajax call to get our data
    ApiConnector.prototype.pullApiData = function pullApiData(URL, QUERYTYPE, CALLBACK,async){
      console.log(QUERYTYPE);
        if(typeof async =='undefined'){
            async=true;
        }
        if(QUERYTYPE.toLowerCase().indexOf("get") != -1){
            if(!window.Helper.isNull(window.USER)){
                if(URL.indexOf("?") != -1){
                    URL = this.PROXYBASE+this.BASE+URL;
                    URL += "&id="+window.USER.userId+"&token="+window.USER.userToken + "&format=json";
                }else{
                    URL = this.PROXYBASE+this.BASE+URL;
                    URL += "?id="+window.USER.userId+"&token="+window.USER.userToken + "&format=json";
                }
//                URL += "?id=1&token=recruiter";
//                console.log("URL");
//                console.log(URL);
            }else{
                URL = this.PROXYBASE+this.BASE+URL;
            }
        }
         console.log("url being queried:" + URL);
        // if we're in debug mode, simulate the response
        if(window.DEBUG && URL != (this.BASE + "/")){
            console.log("IN DEBUG MODE: NOT CALLING REMOTE SERVICE");
            this.simResponse(URL, CALLBACK);
        }else{
            $.ajax({
                type: QUERYTYPE,
                url: URL,
                dataType: "json",
                async:async,
                success: function(data){
                   //console.log(data);
                   //data = data.contents;

                    CALLBACK(data);
                },
                error: function(xhr, errorType, error){
                    // alert("error when trying to initialize connection to the api");
                    console.log(xhr);
                    switch(xhr.status){
                        case 500:
                            // internal server error
                            // consider leaving app
                            console.log("Error: api response = 500");
                            break;
                        case 404:
                            // not found, stop trying
                            // consider leaving app
                            console.log('Error: api response = 404');
                            break;
                        case 400:
                            // bad request
                            console.log("Error: api response = 400");
                            break;
                        case 422:
                            console.log("Error: api response = 422");
                            break;
                        case 200:
                            console.log("Pull API data: 200");
                            break;
                        default:
                            // alert("Error Contacting API: "+xhr.status);
                            break;
                    }
                }
            });
        }
    } // end pullApiData


    ApiConnector.prototype.pushApiData = function pushApiData(DATA, URL, QUERYTYPE, CALLBACK){
        URL = this.PROXYBASE+this.BASE+URL;


        console.log("url being queried:" + URL);
        console.log("data being pushed: ");
        console.log(DATA);
        console.log("query type:");
        console.log(QUERYTYPE);
        // if we're in debug mode, simulate the response
        if(window.DEBUG && URL != (this.BASE + "/")){
            console.log("IN DEBUG MODE: NOT CALLING REMOTE SERVICE");
            this.simResponse(URL, CALLBACK);
        }else{
            $.ajax({
                type: QUERYTYPE,
                url: URL,
                data: DATA,
                processData: false,
                contentType: 'application/json',
                dataType: "json",
                success: function(data){
                    console.log("push new api data success: ");
                    console.log(data);
                    if(!window.Helper.isNull(CALLBACK)){
                        CALLBACK(data);
                    }
                },
                error: function(xhr, errorType, error){
                    alert("error when trying to initialize connection to the api");
                    console.log(xhr);
                    switch(xhr.status){
                        case 500:
                            // internal server error
                            // consider leaving app
                            console.log("Error: api response = 500");
                            break;
                        case 404:
                            // not found, stop trying
                            // consider leaving app
                            console.log('Error: api response = 404');
                            break;
                        case 400:
                            // bad request
                            console.log("Error: api response = 400");
                            break;
                        case 422:
                            console.log("Error: api response = 422");
                            break;
                        case 200:
                            console.log("Pull API data: 200");
                            break;
                        default:
                            // alert("Error Contacting API: "+xhr.status);
                            break;
                    }
                }
            });
        }
    } // end pullApiData

  // -- tool --

    ApiConnector.prototype.getTools = function getTools(fundamental_id, callback){
        var url="/tool?fundamental_id="+fundamental_id;
                    
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.postTool = function postTool(tool, callback){
        var url = "/tool"
        var querytype = "POST";
        var json={
            "tool":tool
        }
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.putTool = function putTool(tool, callback){
        var url="/tool";
        var querytype="PUT";
        var json={
            "tool":tool
        }
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.deleteTool = function deleteTool(tool_id, callback){
        var url="/tool?tool_id="+tool_id;
        var querytype="DELETE";
        var json="";
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.uploadFile = function uploadFile(filedata, callback){
        var url = this.BASE + "/upload";

        /*
        var xhr = new XMLHttpRequest();
        xhr.file = filedata; // not necessary if you create scopes like this
        xhr.addEventListener('progress', function(e) {
            var done = e.position || e.loaded, total = e.totalSize || e.total;
            console.log('xhr progress: ' + (Math.floor(done/total*1000)/10) + '%');
        }, false);
        if ( xhr.upload ) {
            xhr.upload.onprogress = function(e) {
                var done = e.position || e.loaded, total = e.totalSize || e.total;
                console.log('xhr.upload progress: ' + done + ' / ' + total + ' = ' + (Math.floor(done/total*1000)/10) + '%');
            };
        }
        xhr.onreadystatechange = function(e) {
            if ( 4 == this.readyState ) {
                console.log(['xhr upload complete', e]);
            }
        };
        xhr.open('post', url, true);
        xhr.send(filedata);
        console.log(xhr);*/

        $.ajax({
        url: window.site_url+'api/upload',
        type: 'POST',
        data: filedata,
        cache: false,
        dataType: 'json',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        success: function(data, textStatus, jqXHR)
        {   
             callback();
            if(typeof data.error === 'undefined')
            {
                // Success so call function to process the form
               
            }
            else
            {

                // Handle errors here
                console.log('ERRORS: ' + data.error);
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
             console.log(jqXHR);
          
          
            // Handle errors here
            console.log('ERRORS: ' + textStatus);
            // STOP LOADING SPINNER
        }
    });

    }

    ApiConnector.prototype.getFile = function getFile(file_id,callback){
       
        var url="/upload?file_id="+file_id;
                    
        window.API.pullApiData(url, "GET", callback);
        /*var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                //this.response is what you're looking for
              
                callback(this.response);
               
            }
        }
        xhr.open('GET', window.site_url+"api/upload?file_id="+file_id+"&format=json");
        xhr.responseType = 'blob';
        xhr.send();  */ 
    }

    //--fundamental
    ApiConnector.prototype.getFundamentals = function getFundamentals(cat_id, callback){
        var url="/fundamental?cat_id="+cat_id;
        window.API.pullApiData(url, "GET", callback);
    }

    // -- user
    ApiConnector.prototype.newUser = function newUser(user, callback){
        var url="/user";
        var querytype = "POST";
        var json = user;
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.getUsers = function getUsers(callback){
        var async = false;
        var url="/user?auth_email="+window.user.email+"&auth_token="+window.user.token;
        window.API.pullApiData(url, "GET", callback,async);
    }

    ApiConnector.prototype.login = function login(user, callback){
        var url="/login";
        var querytype = "POST";
        var json = user;
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.authenticate = function authenticate(user, callback){
        var url="/authenticate";
        var querytype = "POST";
        var json = user;
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }











   // ----- participant ----
    ApiConnector.prototype.postParticipant = function postParticipant(callback){
        var url="/participant";
        var querytype="POST";
        var json={};
        var jsonString = JSON.stringify(json);
        window.API.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.getParticipantProgress = function getParticipantProgress(participant_id, place_id, callback){
        var url="/response?place_id="+place_id+"&participant_id="+participant_id;
        window.API.pullApiData(url, "GET", callback);
    }


    // ----- audit ----
    ApiConnector.prototype.getAudit = function getAudit(audit_type_id, callback){
        var url="/audit?audit_type_id="+audit_type_id;
        window.API.pullApiData(url, "GET", callback);
    }

    // ----- response 
    ApiConnector.prototype.postResponse = function postResponse(response, callback){
        var url="/response";
        var querytype="POST";

        var json={
                "response": response
            };

        var jsonString = JSON.stringify(json);

        this.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.getResponses = function getResponses(place_id, callback){
        var url= "/response?place_id="+place_id;

        window.API.pullApiData(url, "GET", callback);
    }


    // ----- place ----

    ApiConnector.prototype.getPlace = function getPlace(place_id, callback){
        var url = "/place?place_id="+place_id;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getPlaces = function getPlaces(callback){
        var url = "/place";
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.postPlace = function postPlace(place, callback){
        var url="/place";
        var querytype="POST";

        var json={
                "place": place
            };

        var jsonString = JSON.stringify(json);
        this.pushApiData(jsonString, url, querytype, callback);
    }   

    // ------ marker -----

    ApiConnector.prototype.getMarkers = function getMarkers(place_id,callback){
        var url="/marker?place_id="+place_id;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.postMarker = function postMarker(marker, callback){
        var url="/marker";
        var querytype="POST";

        var json={
            "marker":marker
        };

        var jsonString = JSON.stringify(json);
        this.pushApiData(jsonString, url, querytype, callback);
    }





        //  ----- put GETs here -----

    ApiConnector.prototype.getSports = function getSports(callback){
        var url = "/sport";
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getPositions = function getPositions(callback){
        var url = "/sport";
        window.API.pullApiData(url, "GET", callback);
    }



    ApiConnector.prototype.getApi = function getApi(callback){
        var url = "/";
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getTeam = function getTeam(teamId, callback){
        var url = "/team";
//        // if our teamId is not null, we want an individual team
//        if(!window.Helper.isNull(teamId)){
//            url += "?id="+teamId;
//        }
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getPlayer = function getPlayer(playerId, callback){
        var url = "/player";
        window.UI.showLoadingScreen(null, 500);
        // if our teamId is not null, we want an individual team
        if(!window.Helper.isNull(playerId)){
            url += "?id="+playerId;
        }
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getPlayerView = function getPlayerView(playerId, callback){
        var url = "/playerview";
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getNote = function getPlayerView(playerId, callback){
        var url = "/note";
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getMetricTypeBySport = function getMetricTypeBySport(sportId, callback){
        var url ="/metric_type?sport_id="+sportId;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getMetricViewBySport = function getMetricViewBySport(sportId, callback){
        var url ="/metric_view?sport_id="+sportId;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getMetricViewByPosition = function getMetricViewBySport(positionId, callback){
        var url ="/metric_view?position_id="+positionId;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getPositions = function getPositions(sportId, callback){
        var url ="/position?sport_id="+sportId;
        window.API.pullApiData(url, "GET", callback);
    }

    ApiConnector.prototype.getMetricById = function getMetricById(metricId, callback){
        var url ="/metric_type?id="+metricId;
        window.API.pullApiData(url, "GET", callback);
    }

    //  ----- put POSTs here -----


    ApiConnector.prototype.postLogIn = function postLogIn(email, password, callback){
        var url = "/authentication";
        var querytype = "POST";
        var postObj = {
            "email" : email,
            "password" : password
        }

        var jsonString = JSON.stringify(postObj);
        this.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.postNewPlayers = function postNewPlayers(p){
        // console.log(p);
        var url = "/player";
        var querytype = "POST";

        if(window.Helper.isArray(p)){
            for(var ii=0; ii<p.length; ii++){
                delete p[ii].positions;
                delete p[ii].metrics;
            }
            var postObj = {};
            postObj["players"] = p;
            postObj["user"] = window.API.user;
            var jsonString = JSON.stringify(postObj);
            console.log(jsonString);
        }else{
            delete p.positions;
            delete p.metrics;
            var players = [];
            players.push(p);
            var postObj = {};
            var userObj = {};
            userObj["id"] = window.API.user.id;
            userObj["token"] = window.API.user.token;
            
            postObj["user"] = userObj;

            postObj["players"] = players;
            postObj["user"] = window.API.user;


            var jsonString = JSON.stringify(postObj);
        }
        // console.log("json string");
        // console.log(jsonString);
        // console.log("postObj");
        // console.log(postObj);

        this.pushApiData(jsonString, url, querytype, window.RP.processNewPlayer);
        // this.pushApiData(postObj, url, querytype, window.Mapper.mapPlayer);

    }

    ApiConnector.prototype.postNewTeam = function postNewTeam(t,p){
        // console.log(p);
        var url = "/team";
        var querytype = "POST";

        if(window.Helper.isArray(p)){
            for(var ii=0; ii<p.length; ii++){
                delete p[ii].positions;
                delete p[ii].metrics;
            }
            var postObj = {};
            postObj["user"] = window.API.user;
            postObj["team"] = t;
            postObj["team"]["players"] = p;
            
            console.log(postObj);
            var jsonString = JSON.stringify(postObj);
            console.log(jsonString);
        }else{
            delete p.positions;
            delete p.metrics;
            var players = {};
            var team = {};
            players.push(p);
            team.push(t);
            var postObj = {};
            var userObj = {};
            userObj["id"] = window.API.user.id;
            userObj["token"] = window.API.user.token;
            
            postObj["user"] = userObj;
            postObj["team"] = team;
            postObj["team"]["players"] = players;
            postObj["user"] = window.API.user;


            var jsonString = JSON.stringify(postObj);
        }
        // console.log("json string");
        // console.log(jsonString);
        // console.log("postObj");
        // console.log(postObj);

        this.pushApiData(jsonString, url, querytype, window.RP.processNewPlayer);
        // this.pushApiData(postObj, url, querytype, window.Mapper.mapPlayer);

    }

    //GSP function INCOMPLETE
    ApiConnector.prototype.postNewMetricType = function postNewMetricType(metricType){
            console.log(metricType);
            var url ="/metric_type";
            var querytype = "POST"
            
            var postObj = {};
            postObj["metric_type"] = metricType;
            postObj["user"] = window.API.user;
            var jsonString = JSON.stringify(postObj);

            console.log(jsonString);
            this.pushApiData(jsonString, url, querytype, window.RP.processMetricTypes);
    }

    ApiConnector.prototype.postNewRecruiter = function postNewRecruiter(recruiter, callback){
        var url = "/recruiter";
        var querytype = "POST";
        var jsonString = JSON.stringify(recruiter);
        this.pushApiData(jsonString, url, querytype, callback);

    }

    ApiConnector.prototype.postNewTeam = function postNewTeam(team, callback){
        var url = "/team";
        var querytype = "POST";
        var postObj = {};
        var user = {};
        user['id'] = window.USER.userId;
        user['token'] = window.USER.userToken;
        team['sport_id'] = window.USER.sportId;
        postObj['user'] = user;
        postObj['team'] = team;

        var jsonString = JSON.stringify(postObj);
        this.pushApiData(jsonString, url, querytype, callback);
    }

    //  ----- put PUTs here -----

    ApiConnector.prototype.updatePlayer = function updatePlayer(p, callback){
        var url = "/player";
        var querytype = "PUT";

        if(window.Helper.isArray(p)){
            for(var ii=0; ii<p.length; ii++){
                delete p[ii].positions;
                // delete p[ii].metrics;
            }


            var userObj = {};
            var postObj = {};
            // p.metrics = JSON.stringify(p.metrics);
            userObj['id'] = window.USER.userId;
            userObj['token'] = window.USER.userToken;
            postObj["players"] = p;
            postObj["user"] = userObj;
            var jsonString = JSON.stringify(postObj);
        }else{
//          delete p.positions;
//          delete p.metrics;
            var players = [];
            // p.metrics = JSON.stringify(p.metrics);
            players.push(p);
            var postObj = {};
            var userObj = {};
            // postObj["user"] = userObj;
            userObj['id'] = window.USER.userId;
            userObj['token'] = window.USER.userToken;
            postObj["players"] = players;
            postObj["user"] = userObj;
        //tool.file = card_tile.find("[type='file']").val();

        //console.log(tool.file);


            var jsonString = JSON.stringify(postObj);
        }
        this.pushApiData(jsonString, url, querytype, callback);
    }

    ApiConnector.prototype.updateMetricView = function updateMetricView(metricArr, callback){
            var url="/metric_view";
            var querytype = "PUT";
    }

    //  ----- put DELETEs here -----

}