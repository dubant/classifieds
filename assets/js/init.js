/* ******************
CO.js
********************* */
//var/www/dev/modules/co2/config/CO2/params.json:
urlCtrl.loadableUrls[ "#annonces"] = {
            inMenu : true, 
            useHeader : true, 
            open : true, 
            subdomain : "annonces", 
            subdomainName : "Classifieds",
            hash : "#classifieds.co.market",
            icon : "bullhorn", 
            mainTitle : "Classified ads",
            placeholderMainSearch : "search among classifieds ...",
            lblBtnCreate : "Create a classified ad",
            colorBtnCreate : "azure",
            module:"classifieds"
};

//co.js object types
typeObj.classified = { col:"classified",ctrl:"classified", titleClass : "bg-azure", color:"azure",    icon:"bullhorn",
                   subTypes : [
                       //FR
                       "Technologie","Immobilier","Véhicules","Maison","Loisirs","Mode",
                       //EN
                       "Technology","Property","Vehicles","Home","Leisure","Fashion"
                       ]    
};

//CO LANG
co.shop = {
    form : function() { dyFObj.openForm("classified") },
    i : function () { co.ctrl.lbh("#"+userConnected.username+".view.directory.dir.classifieds");},
};
