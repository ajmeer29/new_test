!function(e){typeof define=="function"&&define.amd?define(e):Index=e()}(function(){return function(e,t){var n={version:"1.0.5",loop:!1,removed:[],added:[],active:[],first:t||0,last:e,span:e-(t||0)+1,back:[],set:function(e){n.curr=r(e);var t=[n.curr];return(n.prev=n.curr-1)<n.first||t.unshift(n.prev),(n.next=n.curr+1)>n.last||t.push(n.next),n.prev=r(n.prev),n.next=r(n.next),typeof _=="function"&&(n.removed=_.difference(n.active,t),n.added=_.difference(t,n.active)),n.active=t,n.back[0]&&(n.direction=n.curr>n.back[0].prev?1:-1),n.back.unshift({prev:n.prev,curr:n.curr,next:n.next}),n}},r=function(e){return n.loop?e>n.last?n.first:e<n.first?n.last:e:Math.min(Math.max(e,n.first),n.last)};return n}});



(function(e,t,n){"$:nomunge";function c(){s=t[o](function(){r.each(function(){var t=e(this),n=t.width(),r=t.height(),i=e.data(this,a);(n!==i.w||r!==i.h)&&t.trigger(u,[i.w=n,i.h=r])}),c()},i[f])}var r=e([]),i=e.resize=e.extend(e.resize,{}),s,o="setTimeout",u="resize",a=u+"-special-event",f="delay",l="throttleWindow";i[f]=250,i[l]=!0,e.event.special[u]={setup:function(){if(!i[l]&&this[o])return!1;var t=e(this);r=r.add(t),e.data(this,a,{w:t.width(),h:t.height()}),r.length===1&&c()},teardown:function(){if(!i[l]&&this[o])return!1;var t=e(this);r=r.not(t),t.removeData(a),r.length||clearTimeout(s)},add:function(t){function s(t,i,s){var o=e(this),u=e.data(this,a);u.w=i!==n?i:o.width(),u.h=s!==n?s:o.height(),r.apply(this,arguments)}if(!i[l]&&this[o])return!1;var r;if(e.isFunction(t))return r=t,s;r=t.handler,t.handler=s}}})(jQuery,this);


!function(a){if(typeof define==="function"&&define.amd){define(["index","jquery","jquery.ba-resize"],a)}else{TabsAccordion=a(Index,jQuery)}}(function(g,e){var c=0,b="tabsaccordion",f=e(window),a=e(document.documentElement).addClass("js"),d=e(document.body);e.resize.throttleWindow=false;e.fn.TabsAccordion=function(j){function i(o,s){var k=b+"-"+c++,q=e(o),m,p,n,l,r={version:"1.2.0",type:(q.hasClass("accordion")&&"accordion")||(q.hasClass("tabs")&&"tabs"),create:function(){m=q.children();p=m.children(":first-child");if(r.index){var t=r.index.curr}(r.index=g(m.length-1)).loop=true;if(t){r.index.set(t)}if(r.type==="tabs"){q.prepend((p=r.tabsCreateTablist(p).children()).end())}n=(r.type==="tabs"?p.parent():q).attr("role","tablist");p.attr({id:function(u){return this.id||k+"-tab-"+u},role:"tab",});(l=m.map(function(u){return e(this).attr({"aria-labelledby":p[u].id,id:this.id||k+"-panel-"+u,role:"tabpanel",}).children().slice(1).wrapAll("<div><div></div></div>").parent().parent().get()})).each(r.collapse);q.attr({id:o.id||k,tabindex:0}).on("click."+k,r.type==="accordion"&&"> * > :first-child"||"> :first-child > *",function(u){r.goTo(p.index(e(u.target).closest(p)))}).on("keydown."+k,function(v){if(v.target!==o){return}var u={37:"prev",38:"prev",39:"next",40:"next",}[v.keyCode];if(u){v.preventDefault();r.goTo(r.index[u])}}).on("resize."+k,r.resize).trigger("create");if(s.saveState){r.extensions.saveState(s.saveState)}if(s.responsiveSwitch){r.extensions.responsiveSwitch(s.responsiveSwitch)}if(s.hashWatch){r.extensions.hashWatch()}if(s.pauseMedia){r.extensions.pauseMedia()}if(typeof r.index.curr!=="number"){r.index.set(0)}setTimeout(function(){q.addClass("transition")});return r.expand(r.index.curr)},destroy:function(t){if(r.type==="tabs"){q.height("auto");n.remove()}else{p.removeAttr("role").filter('[id^="'+k+'"]').removeAttr("id");n.removeAttr("role")}m.removeAttr("aria-expanded aria-labelledby role").filter('[id^="'+k+'"]').removeAttr("id");l.children().children().unwrap().unwrap();if(!t){q.removeData(b).removeData("responsiveBreakpoint."+k)}q.add([window,document.body]).off("."+k).end().removeAttr("aria-activedescendant tabindex").removeClass(r.type).filter('[id^="'+k+'"]').removeAttr("id").end().trigger("destroy");return r},resize:function(){if(r.type==="tabs"){q.height(n.outerHeight()+m.eq(r.index.curr).outerHeight())}else{if(r.type==="accordion"&&m[r.index.curr].ariaExpanded){l.eq(r.index.curr).height(l.eq(r.index.curr).children().outerHeight())}}return r},expand:function(t){var u=m.eq(t).attr("aria-expanded",m[t].ariaExpanded=true);if(r.resize().type==="tabs"){p.eq(t).addClass("current")}q.attr("aria-activedescendant",m[r.index.curr].id).trigger("expand",[t,u]);return r},collapse:function(t){var u=m.eq(t).attr("aria-expanded",m[t].ariaExpanded=false);if(r.type==="tabs"){p.eq(t).removeClass("current")}else{l.eq(t).height(0)}q.trigger("collapse",[t,u]);return r},goTo:function(t){if(r.index.curr!==t&&typeof r.index.curr==="number"){r.collapse(r.index.curr)}r.index.set(t);return r[r.type==="accordion"&&m.eq(t).prop("ariaExpanded")?"collapse":"expand"](r.index.curr)},tabsCreateTablist:s.tabsCreateTablist||function(v){for(var u=0,t="";u<v.length;u++){t+="<li>"+v[u].innerHTML+"</li>"}return e("<ul>"+t+"</ul>")},extensions:{hashWatch:function(){var t={changeHash:function(v,u){var w=u[0].id;u[0].id="";location.hash=v;u[0].id=w;return t},expand:function(w,v){var u=q.find(w);if(u.length){var x=u.closest(m);if(x.length){if(v){v.preventDefault()}r.goTo(m.index(x));t.changeHash(w,u);if(v){setTimeout(function(){a.add(d).animate({scrollTop:u.offset().top,})},250)}}}return t},};d.on("click."+k,'a[href^="#"]:not([href="#"])',function(u){t.expand(e(u.target).attr("href"),u)}).on("hashchange."+k,function(){t.expand(location.hash)});return t.expand(location.hash)},saveStateLoaded:false,saveState:function(u){if(typeof u!=="object"){return}var t={remove:function(){u.removeItem(k)},load:function(){var v=u.getItem(k),w=JSON.parse(v);if(w&&w.current){r.index.set(w.current)}r.extensions.saveStateLoaded=true},save:function(){u.setItem(k,JSON.stringify({current:r.index.curr,expanded:m[r.index.curr].ariaExpanded}))},};if(!r.extensions.saveStateLoaded){t.load()}f.on("unload."+k,t.save);return t},responsiveSwitch:function(u){if(u==="tablist"){if(r.type==="tabs"){q.data("responsiveBreakpoint."+k,u=t())}else{u=q.data("responsiveBreakpoint."+k)}}function t(){for(var x=0,y=0;x<p.length;x++){y+=p.eq(x).outerWidth(true)}return y}function w(y){var z=r.index.curr,x=m[z].ariaExpanded;r.destroy(true);q.addClass(r.type=y);r.index.set(z);r.create();q.trigger("typechange",y)}function v(){var x=q.outerWidth()<=u?"accordion":"tabs";if(r.type!==x){w(x)}}q.on("resize."+k,v)},pauseMedia:function(){if(typeof Modernizr==="undefined"||!Modernizr.audio||!Modernizr.video||!q.find("audio, video").length){return}q.on("collapse."+k,function(u,t,v){v.find("audio, video").each(function(){this.pause()})})},},};return r.create()}var j=j||{},h=Array.prototype.slice.call(arguments,1);return this.each(function(k){var l=e(this);return l.data(b)?l.data(b)[j].apply(this,h):l.data(b,i(this,j))})}});





