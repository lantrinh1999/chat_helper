lhcAppControllers.controller("StartChatFormCtrl",["$scope","$http","$location","$rootScope","$log","$window",function(t,e,i,s,d,l){this.startchatfields=[],this.size=6,this.fieldtype="text",this.visibility="all",this.showcondition="always",this.priority=50;var n=this;this.setStartChatFields=function(){n.startchatfields=l.startChatFields},this.move=function(t,e){index=n.startchatfields.indexOf(t),newIndex=index+e,newIndex>-1&&newIndex<n.startchatfields.length&&(removedElement=n.startchatfields.splice(index,1)[0],n.startchatfields.splice(newIndex,0,removedElement))},this.addField=function(){n.startchatfields.push({fieldname:n.fieldname,defaultvalue:n.defaultvalue,fieldtype:n.fieldtype,visibility:n.visibility,fieldidentifier:n.fieldidentifier,size:n.size,isrequired:n.isrequired,hide_prefilled:n.hide_prefilled,options:n.options,showcondition:n.showcondition,priority:n.priority})},this.deleteField=function(t){n.startchatfields.splice(n.startchatfields.indexOf(t),1)},this.moveLeftField=function(t){n.move(t,-1)},this.moveRightField=function(t){n.move(t,1)}}]),lhcAppControllers.controller("StartChatFormURLCtrl",["$scope","$http","$location","$rootScope","$log","$window",function(t,e,i,s,d,l){this.startchatfields=[];var n=this;this.move=function(t,e){index=n.startchatfields.indexOf(t),newIndex=index+e,newIndex>-1&&newIndex<n.startchatfields.length&&(removedElement=n.startchatfields.splice(index,1)[0],n.startchatfields.splice(newIndex,0,removedElement))},this.setStartFields=function(){n.startchatfields=l.startChatFieldsURL},this.addField=function(){n.startchatfields.push({fieldname:n.fieldname,fieldidentifier:n.fieldidentifier})},this.deleteField=function(t){n.startchatfields.splice(n.startchatfields.indexOf(t),1)},this.moveLeftField=function(t){n.move(t,-1)},this.moveRightField=function(t){n.move(t,1)}}]);
//# sourceMappingURL=9cc4f016bd92e4adb4c915e7e8d8e092.js.map