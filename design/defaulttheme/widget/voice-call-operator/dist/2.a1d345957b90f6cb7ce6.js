(window.webpackJsonpLHCVoiceCallAPP=window.webpackJsonpLHCVoiceCallAPP||[]).push([[2],{52:function(e,a,t){"use strict";t.r(a);var n=t(24),i=t.n(n),r=t(26),c=t.n(r),l=t(14),s=t.n(l),o=t(1),u=t.n(o),d=t(0),m=t.n(d),p=t(32),v=t.n(p),_=t(53);var f=function(e,a){var t=Object(d.useRef)();Object(d.useEffect)((function(){t.current=e}),[e]),Object(d.useEffect)((function(){if(null!==a){var e=setInterval((function(){t.current()}),a);return function(){return clearInterval(e)}}}),[a])},b=t(50),k=t.n(b),h=function(e){var a=Object(d.useState)(!1),t=s()(a,2),n=t[0],i=t[1];return Object(d.useEffect)((function(){e.user.videoTrack.play("player-"+e.user.uid)}),[]),m.a.createElement("div",{className:(n?"col-12":"col")+" bg-light m-0 align-middle text-center d-flex p-0",id:"player-"+e.user.uid,title:"UID "+e.user.uid},m.a.createElement("div",{className:"full-screen-icon",onClick:function(e){return i(!n)}},m.a.createElement("span",{className:"material-icons"},n?"fullscreen_exit":"fullscreen")))},y=function(e){var a=Object(_.a)("voice_call"),t=a.t;a.i18n;return 1==e.video?m.a.createElement(h,{user:e.user,key:"video-stream-"+e.user.uid}):m.a.createElement("div",{className:"col bg-light m-0 align-middle text-center d-flex p-0",id:"player-"+e.user.uid,title:"UID "+e.user.uid},m.a.createElement("div",{className:"align-self-center mx-auto text-muted font-weight-bold",title:"UID "+e.user.uid},m.a.createElement("span",{className:"material-icons"},"graphic_eq"),t("voice_call.audio_call")))};function T(e,a){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);a&&(n=n.filter((function(a){return Object.getOwnPropertyDescriptor(e,a).enumerable}))),t.push.apply(t,n)}return t}function E(e){for(var a=1;a<arguments.length;a++){var t=null!=arguments[a]?arguments[a]:{};a%2?T(Object(t),!0).forEach((function(a){u()(e,a,t[a])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):T(Object(t)).forEach((function(a){Object.defineProperty(e,a,Object.getOwnPropertyDescriptor(t,a))}))}return e}var x=k.a.createClient({mode:"rtc",codec:"vp8"});function g(e,a){switch(a.type){case"update":return E({},e,{},a.value);case"user_published":if(void 0===e.remoteUsers[a.user.uid]){var t={user:a.user,video:"video"==a.media,audio:"audio"==a.media,media:[a.media]};e.remoteUsers[a.user.uid]=t}else"audio"==a.media?e.remoteUsers[a.user.uid].audio=!0:"video"==a.media&&(e.remoteUsers[a.user.uid].video=!0),e.remoteUsers[a.user.uid].media.push(a.media);return E({},e);case"user_update":return void 0!==e.remoteUsers[a.user.uid]&&("audio"==a.media?e.remoteUsers[a.user.uid].audio=!1:"video"==a.media&&(e.remoteUsers[a.user.uid].video=!1),e.remoteUsers[a.user.uid]),E({},e);case"user_unpublished":return delete e.remoteUsers[a.user.uid],E({},e);default:throw new Error("Unknown action!")}}a.default=function(e){var a=Object(d.useReducer)(g,{call:{},localTracks:{videoTrack:null,audioTrack:null},hasAudio:!1,hasVideo:!1,screenShare:!1,remoteUsers:{},uid:null,inCall:!1,pendingJoin:!1,type:"",isMuted:!1}),t=s()(a,2),n=t[0],r=t[1],l=Object(d.useRef)(n);Object(d.useEffect)((function(){l.current=n}),[n]),Object(d.useEffect)((function(){T(),k.a.getDevices().then((function(e){var a=e.filter((function(e){return"audioinput"===e.kind})),t=e.filter((function(e){return"videoinput"===e.kind}));r({type:"update",value:{hasAudio:a.length>0,hasVideo:t.length>0}})}))}),[]);var o=Object(_.a)("voice_call"),u=o.t,p=(o.i18n,function(a){var t=null;t=!0===e.isVisitor?WWW_DIR_JAVASCRIPT+"voicevideo/join/"+e.initParams.id+"/"+e.initParams.hash+"/(action)/request":WWW_DIR_JAVASCRIPT+"voicevideo/joinop/"+e.initParams.id+"/(action)/join",v.a.post(t,{type:a}).then((function(e){r({type:"update",value:{call:e.data,type:a,pendingJoin:!0}})}))}),b=function(){var a=c()(i.a.mark((function a(t){var c;return i.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:if(c=null,c=!0===e.isVisitor?WWW_DIR_JAVASCRIPT+"voicevideo/join/"+e.initParams.id+"/"+e.initParams.hash+"/(action)/"+t:WWW_DIR_JAVASCRIPT+"voicevideo/joinop/"+e.initParams.id+"//(action)/"+t,v.a.get(c).then((function(e){r({type:"update",value:{call:e.data}})})),"leave"!=t&&"end"!=t&&"cancel"!=t){a.next=8;break}return Object.keys(n.localTracks).forEach((function(e){var a=n.localTracks[e];a&&(a.stop(),a.close(),n.localTracks[e]=void 0)})),r({type:"update",value:{remoteUsers:{},uid:null,inCall:!1,localTracks:{videoTrack:null,audioTrack:null}}}),a.next=8,x.leave();case 8:case"end":return a.stop()}}),a)})));return function(e){return a.apply(this,arguments)}}(),h=function(){null!==n.localTracks.audioTrack&&(n.localTracks.audioTrack.setEnabled(n.isMuted),r({type:"update",value:{isMuted:!n.isMuted}}))},T=function(){var a=null;a=!0===e.isVisitor?WWW_DIR_JAVASCRIPT+"voicevideo/join/"+e.initParams.id+"/"+e.initParams.hash:WWW_DIR_JAVASCRIPT+"voicevideo/joinop/"+e.initParams.id,v.a.get(a).then((function(e){r({type:"update",value:{call:e.data}})}))};f((function(){T()}),2!=n.call.status||2!=n.call.vi_status||1!=n.call.op_status?2e3:null);var E=function(){var e=c()(i.a.mark((function e(a,t){return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return a.uid,e.next=3,x.subscribe(a,t);case 3:r({type:"user_published",media:t,user:a}),"audio"===t&&a.audioTrack.play();case 5:case"end":return e.stop()}}),e)})));return function(a,t){return e.apply(this,arguments)}}(),j=function(e,a){E(e,a)},N=function(e){r({type:"user_unpublished",user:e}),T()},C=function(e,a){r({type:"user_update",media:a,user:e})};Object(d.useEffect)((function(){!0===e.isVisitor&&1==n.pendingJoin&&(2===n.call.vi_status?O(n.call):!0===n.inCall&&2!==n.call.vi_status&&b("cancel"))}),[n.call.vi_status,n.pendingJoin]),Object(d.useEffect)((function(){1===n.call.op_status&&!1===e.isVisitor&&!1===n.inCall&&1==n.pendingJoin&&O(n.call)}),[n.call.op_status,n.pendingJoin]);var P=function(){var e=c()(i.a.mark((function e(){var a,t,c;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(1!=n.screenShare){e.next=11;break}if(!(a=n.localTracks).videoTrack){e.next=7;break}return e.next=5,x.unpublish(a.videoTrack);case 5:a.videoTrack.stop(),a.videoTrack.close();case 7:return a.videoTrack=null,r({type:"update",value:{inCall:!0,screenShare:!1,localTracks:a}}),"audiovideo"==n.type&&w(),e.abrupt("return");case 11:return e.prev=11,e.next=14,k.a.createScreenVideoTrack();case 14:if(t=e.sent,c=n.localTracks,!n.localTracks.videoTrack){e.next=21;break}return e.next=19,x.unpublish(n.localTracks.videoTrack);case 19:n.localTracks.videoTrack.stop(),n.localTracks.videoTrack.close();case 21:return c.videoTrack=t,c.videoTrack.play("local-player"),r({type:"update",value:{inCall:!0,screenShare:!0,localTracks:c}}),e.next=26,x.publish(t);case 26:e.next=31;break;case 28:e.prev=28,e.t0=e.catch(11),alert("Screen could not be shared!");case 31:case"end":return e.stop()}}),e,null,[[11,28]])})));return function(){return e.apply(this,arguments)}}(),w=function(){var e=c()(i.a.mark((function e(){var a,t,c;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!n.localTracks.videoTrack||null===n.localTracks.videoTrack){e.next=12;break}if(!(a=n.localTracks).videoTrack){e.next=7;break}return e.next=5,x.unpublish(a.videoTrack);case 5:a.videoTrack.stop(),a.videoTrack.close();case 7:return a.videoTrack=null,r({type:"update",value:{inCall:!0,type:"audio",localTracks:a}}),e.abrupt("return");case 12:return e.next=14,k.a.createCameraVideoTrack();case 14:return t=e.sent,(c=n.localTracks).videoTrack=t,c.videoTrack.play("local-player"),r({type:"update",value:{inCall:!0,type:"audiovideo",localTracks:c}}),e.next=21,x.publish(t);case 21:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}(),V=function(){var a=null;a=!0===e.isVisitor?WWW_DIR_JAVASCRIPT+"voicevideo/join/"+e.initParams.id+"/"+e.initParams.hash+"/(action)/token":WWW_DIR_JAVASCRIPT+"voicevideo/joinop/"+e.initParams.id+"//(action)/token",v.a.get(a).then((function(e){r({type:"update",value:{call:e.data}}),x.renewToken(e.data.token)}))},O=function(){var a=c()(i.a.mark((function a(t){var c,l;return i.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:if(!0!==n.inCall&&(!0!==e.isVisitor||2==t.vi_status)){a.next=2;break}return a.abrupt("return");case 2:return x.on("user-published",j),x.on("user-unpublished",C),x.on("user-left",N),x.on("token-privilege-will-expire",V),a.next=8,x.join(e.initParams.appid,e.initParams.id+"_"+e.initParams.hash,t.token||null);case 8:return c=a.sent,a.next=11,k.a.createMicrophoneAudioTrack();case 11:if(a.t0=a.sent,l={audioTrack:a.t0},"audiovideo"!=n.type&&(1!=e.isVisitor||1!=n.call.video)){a.next=18;break}return a.next=16,k.a.createCameraVideoTrack();case 16:l.videoTrack=a.sent,l.videoTrack.play("local-player");case 18:return r({type:"update",value:{uid:c,inCall:!0,localTracks:l}}),a.next=21,x.publish(Object.values(l));case 21:case"end":return a.stop()}}),a)})));return function(e){return a.apply(this,arguments)}}();return m.a.createElement(m.a.Fragment,null,m.a.createElement("div",{className:"d-flex flex-md-row flex-column flex-grow-1 pt-0"},m.a.createElement("div",{className:"col bg-light m-0 align-middle text-center d-flex p-0",title:"UID "+n.uid,id:"local-player"},1==e.isVisitor&&1==n.call.vi_status&&m.a.createElement("div",{className:"align-self-center mx-auto text-muted font-weight-bold"},u("voice_call.wait_join_long")),null==n.localTracks.videoTrack&&1==n.inCall&&m.a.createElement("div",{className:"align-self-center mx-auto text-muted font-weight-bold"},m.a.createElement("span",{className:"material-icons"},"graphic_eq"),u("voice_call.me_audio"))),1==n.inCall&&Object.keys(n.remoteUsers).map((function(e,a){return m.a.createElement(y,{user:n.remoteUsers[e].user,key:"media_"+n.remoteUsers[e].user.uid+"_"+n.remoteUsers[e].media.join("_"),audio:n.remoteUsers[e].audio,video:n.remoteUsers[e].video,media:n.remoteUsers[e].media})}))),m.a.createElement("div",{className:"row border-top"},m.a.createElement("div",{className:"btn-toolbar p-2 text-center mx-auto btn-toolbar",role:"toolbar"},m.a.createElement("div",{className:"p-2 text-center mx-auto btn-group",role:"group"},1==e.isVisitor&&1==n.call.vi_status&&m.a.createElement("span",{className:"text-muted py-2"},u("voice_call.wait_let_in")," "),1==e.isVisitor&&(0==n.call.vi_status||!1===n.pendingJoin)&&m.a.createElement("span",{className:"text-muted py-2"},u("voice_call.join_to_start")," "),0==e.isVisitor&&2==n.call.vi_status&&m.a.createElement("span",{className:"text-muted py-2"},u("voice_call.visitor_joined")),0==e.isVisitor&&0==n.call.vi_status&&m.a.createElement("span",{className:"text-muted py-2"},u("voice_call.pending_visitor_join")),0==e.isVisitor&&1==n.call.vi_status&&m.a.createElement("span",{className:"text-muted py-2"},u("voice_call.visitor_waiting_in"))),m.a.createElement("div",{className:"p-2 text-center mx-auto btn-group",role:"group"},0==e.isVisitor&&""!=n.call.token&&1==n.call.vi_status&&m.a.createElement("button",{className:"btn btn-sm btn-outline-primary",onClick:function(){return b("letvisitorin")}},m.a.createElement("span",{className:"material-icons"},"face"),u("voice_call.let_visitor_in")),0==e.isVisitor&&1==n.inCall&&m.a.createElement(m.a.Fragment,null,m.a.createElement("button",{title:u("voice_call.leave_a_call"),className:"btn btn-sm btn-outline-secondary",onClick:function(){return b("leave")}},m.a.createElement("span",{className:"material-icons"},"exit_to_app"),u("voice_call.leave_call_op")),m.a.createElement("button",{title:u("voice_call.end_call_op"),className:"btn btn-sm btn-outline-secondary",onClick:function(){return b("end")}},m.a.createElement("span",{className:"material-icons"},"call_end"),u("voice_call.end_call_button")),m.a.createElement("button",{title:1==n.isMuted?u("voice_call.unmute_mic"):u("voice_call.mute_mic"),className:"btn btn-sm btn-outline-secondary",onClick:function(){return h()}},m.a.createElement("span",{className:"material-icons mr-0"},1==n.isMuted?"mic_off":"mic")),1==e.initParams.options.video&&!0===n.hasVideo&&m.a.createElement("button",{className:"btn btn-sm btn-outline-secondary",disabled:n.screenShare,onClick:function(){return w()},title:"audio"==n.type?u("voice_call.share_video"):u("voice_call.stop_sharing_video")},m.a.createElement("span",{className:"material-icons mr-0"},"audio"==n.type||1==n.screenShare?"videocam_off":"videocam")),1==e.initParams.options.screenshare&&m.a.createElement("button",{className:"btn btn-sm btn-outline-secondary",onClick:function(){return P()},title:1==n.screenShare?u("voice_call.stop_share_screen"):u("voice_call.share_your_screen")},m.a.createElement("span",{className:"material-icons mr-0"},1==n.screenShare?"stop_screen_share":"screen_share"))),(0==e.isVisitor&&0==n.call.op_status||1==e.isVisitor&&0==n.call.vi_status||0==n.pendingJoin)&&m.a.createElement(m.a.Fragment,null,!0===n.hasAudio&&m.a.createElement("button",{className:"btn btn-sm btn-outline-secondary",onClick:function(){return p("audio")}},m.a.createElement("span",{className:"material-icons"},"call"),u("voice_call.join_with_audio")),1==e.initParams.options.video&&!0===n.hasVideo&&m.a.createElement("button",{className:"btn btn-sm btn-outline-secondary",onClick:function(){return p("audiovideo")}},m.a.createElement("span",{className:"material-icons"},"video_call"),u("voice_call.join_with_audio_video"))),1==e.isVisitor&&1==n.inCall&&m.a.createElement(m.a.Fragment,null,m.a.createElement("button",{className:"btn btn-outline-primary btn-sm",onClick:function(){return b("cancel")}},m.a.createElement("span",{className:"material-icons"},"call_end"),u("voice_call.leave_room")),m.a.createElement("button",{title:1==n.isMuted?u("voice_call.unmute_mic"):u("voice_call.mute_mic"),className:"btn btn-outline-secondary btn-sm",onClick:function(){return h()}},m.a.createElement("span",{className:"material-icons mr-0"},1==n.isMuted?"mic_off":"mic")),1==e.initParams.options.video&&!0===n.hasVideo&&m.a.createElement("button",{disabled:n.screenShare,className:"btn btn-outline-secondary btn-sm",onClick:function(){return w()},title:"audio"==n.type?u("voice_call.share_video"):u("voice_call.stop_sharing_video")},m.a.createElement("span",{className:"material-icons mr-0"},"audio"==n.type||1==n.screenShare?"videocam_off":"videocam")),1==e.initParams.options.screenshare&&m.a.createElement("button",{className:"btn btn-outline-secondary btn-sm",onClick:function(){return P()},title:1==n.screenShare?u("voice_call.stop_share_screen"):u("voice_call.share_your_screen")},m.a.createElement("span",{className:"material-icons mr-0"},1==n.screenShare?"stop_screen_share":"screen_share"))),1==e.isVisitor&&!0===n.pendingJoin&&1==n.call.vi_status&&m.a.createElement("button",{className:"btn btn-outline-primary btn-sm",onClick:function(){return b("cancel")}},u("voice_call.cancel_join"))))))}}}]);
//# sourceMappingURL=2.a1d345957b90f6cb7ce6.js.map