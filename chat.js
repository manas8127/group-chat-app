function submitChat(){
		if(form1.msg.value == ''){
			alert('Enter a message!');
			return;
		}
		
		//$('#gif').show();
		var text = form1.msg.value;
		var msg = text.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '<br />');
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
			if(xmlhttp.status==200){
					document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
				//console.log(xmlhttp.responseText);
				//$('#gif').hide();
				//document.getElementById('audiotag1').play();
		}
		}
		}
		xmlhttp.open('GET', 'insert.php?msg='+msg, true);
		xmlhttp.send();
	}

	$(function() {
    $("#msg").keypress(function (e) {
        if(e.which == 13 && !e.shiftKey) {
            
        	submitChat();
            $("#chatlogs").append($(this).val());
            $(this).val("");
            e.preventDefault();
        }
    });
    });

	$(document).ready(function(e){ $.ajaxSetup({cache:false}); setInterval(function(){$('#chatlogs').load('logs.php');}, 2000); });

