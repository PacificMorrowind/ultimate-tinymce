(function(){tinymce.PluginManager.requireLangPack('codemagic');tinymce.create('tinymce.plugins.CodeMagic',{init:function(ed,url){ed.addCommand('mceCodeMagic',function(){ed.windowManager.open({file:url+'/codemagic.htm',width:1200,height:600,inline:1,maximizable:true},{plugin_url:url})});ed.addButton('codemagic',{title:'codemagic.editor_button',cmd:'mceCodeMagic',image:url+'/img/code.png'});ed.onNodeChange.add(function(ed,cm,n,co){cm.setDisabled('link',co&&n.nodeName!='A');cm.setActive('link',n.nodeName=='A'&&!n.name)})},getInfo:function(){return{longname:'CodeMagic - syntax coloring and intendation',author:'Sutulustus',authorurl:'http://www.triad.sk/#/en',version:'0.9.5'}}});tinymce.PluginManager.add('codemagic',tinymce.plugins.CodeMagic)})();