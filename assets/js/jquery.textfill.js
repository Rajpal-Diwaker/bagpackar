!function(i){i.fn.textfill=function(e){var t=i.extend({debug:!1,maxFontPixels:40,minFontPixels:4,innerTag:"span",widthOnly:!1,success:null,fail:null,complete:null,explicitWidth:null,explicitHeight:null,changeLineHeight:!1,truncateOnFail:!1,allowOverflow:!1},e);function n(){t.debug&&"undefined"!=typeof console&&void 0!==console.debug&&console.debug.apply(console,arguments)}function l(i,e,t,l,s,h){function o(i,e){var t=" / ";return i>e?t=" > ":i==e&&(t=" = "),t}n("[TextFill] "+i+" { font-size: "+e.css("font-size")+",Height: "+e.height()+"px "+o(e.height(),t)+t+"px,Width: "+e.width()+o(e.width(),l)+l+",minFontPixels: "+s+"px, maxFontPixels: "+h+"px }")}function s(i,e,t,n,s,h,o,a){for(l(i,e,s,h,o,a);o<Math.floor(a)-1;){var r=Math.floor((o+a)/2);e.css("font-size",r);var c=t.call(e);if(c<=n){if(o=r,c==n)break}else a=r;l(i,e,s,h,o,a)}return e.css("font-size",a),t.call(e)<=n&&l(i+"* ",e,s,h,o=a,a),o}return n("[TextFill] Start Debug"),this.each(function(){var e=i(t.innerTag+":first",this);if(n("[TextFill] Inner text: "+e.text()),n("[TextFill] All options: ",t),n("[TextFill] Maximum sizes: { Height: "+l+"px, Width: "+h+"px }"),!e.is(":visible"))return t.fail&&t.fail(this),void n("[TextFill] Failure { Current Width: "+e.width()+", Maximum Width: "+h+", Current Height: "+e.height()+", Maximum Height: "+l+" }");var l=t.explicitHeight||i(this).height(),h=t.explicitWidth||i(this).width(),o=e.css("font-size"),a=parseFloat(e.css("line-height"))/parseFloat(o),r=t.minFontPixels,c=t.maxFontPixels<=0?l:t.maxFontPixels,u=void 0;t.widthOnly?e.css("white-space","nowrap"):u=s("Height",e,i.fn.height,l,l,h,r,c);var f;if(f=s("Width",e,i.fn.width,h,l,h,r,c),t.widthOnly)e.css({"font-size":f}),t.changeLineHeight&&e.parent().css("line-height",a*f+"px");else{var x=Math.min(u,f);e.css("font-size",x),t.changeLineHeight&&e.parent().css("line-height",a*x+"px")}n("[TextFill] Finished { Old font-size: "+o+", New font-size: "+e.css("font-size")+" }"),e.width()>h&&!t.allowOverflow||e.height()>l&&!t.widthOnly&&!t.allowOverflow?(e.css("font-size",o),t.fail&&t.fail(this),n("[TextFill] Failure { Current Width: "+e.width()+", Maximum Width: "+h+", Current Height: "+e.height()+", Maximum Height: "+l+" }")):t.success&&t.success(this)}),t.complete&&t.complete(this),n("[TextFill] End Debug"),this}}("undefined"!=typeof module&&module.exports?require("jquery"):window.jQuery);