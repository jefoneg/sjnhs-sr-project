
<!-- CORE ANIMATION -->
	core_value = 1;

	setInterval( function (){
			core_value ++;
			if(core_value == 6 ){
				core_value = 1;
			}
			$(".core-box").slideUp(500);
			setTimeout(function(){
				$("#core-title").html($("#core-title-"+core_value).html());
				$("#core-content").html($("#core-content-"+core_value).html());
			},600);

			setTimeout(function(){
				$(".core-box").slideDown(500);
			},700);

						
	},4000);
	reverse = false;
	max = 130;
	setInterval(function(){
		if(reverse == false ){
			max -= 5;
			$("#logo").css("border-left","2px solid black ");
			$("#logo").css("border-right","0px solid black ");
		}else{
			max += 5;
			$("#logo").css("border-right","2px solid black ");
			$("#logo").css("border-left","0px solid black ");
		}
		$("#logo").css("width",max+"px");

		if(max == 0){
			reverse = true;
		}
		if(max == 130 ){
			reverse = false;
		}
	},100);
