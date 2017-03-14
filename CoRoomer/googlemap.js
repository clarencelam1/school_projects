function initialize() {
	//Apartments, we have mapped 44 + 1 for homepage
	//The coordinates for each apartment is where their infowindows" will popup.
	var page = window.location.pathname;
	var url = window.location.href;
	var homepage = checkHomePage();
	

	var numApts =45;
	var apartmentsLat = new Array(numApts+1);	var apartmentsLng = new Array(numApts+1);	var apartmentsInfo = new Array(numApts+1);
	var apartmentsCondo= new Array(numApts+1);
	var z = 0;
	
	/*
	Canyon Park Apartments
La Jolla Canyon Apartments
Vista La Jolla Condos
*/
apartmentsLat[z] = 32.865556;apartmentsLng[z] = -117.235556;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Archstone La Jolla "; 
	apartmentsLat[z] = 32.862878;apartmentsLng[z] = -117.228101;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Archstone La Jolla Collony";	
	apartmentsLat[z] = 32.865245;apartmentsLng[z] = -117.209777;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Archstone UTC";	
	//	apartmentsLat[z] = 32.858392;apartmentsLng[z] = -117.227600;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Barcelona";	
	apartmentsLat[z] = 32.868333;apartmentsLng[z] = -117.234722;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Cambridge";
	
	apartmentsLat[z] = 32.878983;apartmentsLng[z] = -117.214172;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Canyon Park";	
	//	apartmentsLat[z] = 32.862500;apartmentsLng[z] = -117.231667;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Cape of La Jolla";		
	apartmentsLat[z] = 32.870576;apartmentsLng[z] = -117.216976;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Costa Verde Village";
	//	apartmentsLat[z] = 32.867990;apartmentsLng[z] = -117.217813;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Costa Verde South";
	apartmentsLat[z] = 32.870060;apartmentsLng[z] = -117.215742;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Costa Verde Towers";
	//	apartmentsLat[z] = 32.862579;apartmentsLng[z] = -117.222059;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Dieguenos";		
	apartmentsLat[z] = 32.858604;apartmentsLng[z] = -117.232962;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Eastbluff";
	apartmentsLat[z] = 32.861827;apartmentsLng[z] = -117.215234;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Genesee Highlands";
	apartmentsLat[z] = 32.872991;apartmentsLng[z] = -117.204005;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Jolla Crossroads";
	apartmentsLat[z] = 32.865272;apartmentsLng[z] = -117.223036;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Jolla Del Sol";	
	apartmentsLat[z] = 32.868942;apartmentsLng[z] = -117.224438;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "La Jolla Garden Villas";	
	apartmentsLat[z] = 32.866793;apartmentsLng[z] = -117.223643;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Jolla International Garden";	 	
	apartmentsLat[z] = 32.869972;apartmentsLng[z] = -117.223537;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Jolla Palms";
	apartmentsLat[z] = 32.868303;apartmentsLng[z] = -117.237273;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "La Jolla Terrace";	
	apartmentsLat[z] = 32.869444;apartmentsLng[z] = -117.219722;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "La Jolla Village Park";
	apartmentsLat[z] = 32.871159;apartmentsLng[z] = -117.221255;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "La Jolla Village Tennis Club";
	apartmentsLat[z] = 32.866365;apartmentsLng[z] = -117.226362;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Mirada at La Jolla Colony";   
	apartmentsLat[z] = 32.863891;apartmentsLng[z] = -117.223685;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Regencia";
	apartmentsLat[z] = 32.867898;apartmentsLng[z] = -117.223660;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "La Scala";	
	apartmentsLat[z] = 32.860547;apartmentsLng[z] = -117.228616;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Las Flores";
	apartmentsLat[z] = 32.860133;apartmentsLng[z] = -117.223880;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Las Palmas";	
	apartmentsLat[z] = 32.860474;apartmentsLng[z] = -117.226803;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Madrid";	
	apartmentsLat[z] = 32.862923;apartmentsLng[z] = -117.225977;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Marbella";	
	apartmentsLat[z] = 32.867634;apartmentsLng[z] = -117.226063;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Nobel Court";	
	apartmentsLat[z] = 32.865375;apartmentsLng[z] = -117.213794;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Pacific Gardens";	
	apartmentsLat[z] = 32.866503;apartmentsLng[z] = -117.221514;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Pines of La Jolla";
	apartmentsLat[z] = 32.862438;apartmentsLng[z] = -117.217867;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Playmor Terrace";	
	apartmentsLat[z] = 32.866602;apartmentsLng[z] = -117.219036;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Regents Court";
	apartmentsLat[z] = 32.874199;apartmentsLng[z] = -117.217319;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Regents La Jolla";	
	apartmentsLat[z] = 32.869292;apartmentsLng[z] = -117.232136;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "The Terraces";
	apartmentsLat[z] = 32.870293;apartmentsLng[z] = -117.203010;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "The Villas at Renaissance";
	apartmentsLat[z] = 32.869369;apartmentsLng[z] = -117.221793;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Trieste";
	apartmentsLat[z] = 32.860097;apartmentsLng[z] = -117.220431;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "University Woods";	
	apartmentsLat[z] = 32.868635;apartmentsLng[z] = -117.202343;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Valentia";	
	apartmentsLat[z] = 32.867477;apartmentsLng[z] = -117.221214;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Venetian";	
	apartmentsLat[z] = 32.864620;apartmentsLng[z] = -117.227533;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Verano";
	apartmentsLat[z] = 32.862778;apartmentsLng[z] = -117.234444;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Villa La Jolla";
	apartmentsLat[z] = 32.866095;apartmentsLng[z] = -117.234333;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Villas Mallorca";
	apartmentsLat[z] = 32.860591;apartmentsLng[z] = -117.234628;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Villa Tuscana";
	apartmentsLat[z] = 32.869015;apartmentsLng[z] = -117.225730;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Villa Vicenza";	
	apartmentsLat[z] = 32.864978;apartmentsLng[z] = -117.215951;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Whispering Pines";
	apartmentsLat[z] = 32.867561;apartmentsLng[z] = -117.234703;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Woodlands North";
	apartmentsLat[z] = 32.861110;apartmentsLng[z] = -117.231785;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Woodlands South";
	apartmentsLat[z] = 32.859745;apartmentsLng[z] = -117.232439;apartmentsCondo[z] = 1;apartmentsInfo[z++] = "Woodlands West";
	
	//for the home page
	apartmentsLat[z] = 32.869015;apartmentsLng[z] =-117.220595;apartmentsCondo[z] = 0;apartmentsInfo[z++] = "Center";
	var aptNames = new Array(numApts);
	
	z=0;
	aptNames[z++]="loc=00";aptNames[z++]="loc=01";aptNames[z++]="loc=02";aptNames[z++]="loc=03";
	aptNames[z++]="loc=04";aptNames[z++]="loc=05";aptNames[z++]="loc=06";aptNames[z++]="loc=07";
	aptNames[z++]="loc=08";aptNames[z++]="loc=09";aptNames[z++]="loc=10";aptNames[z++]="loc=11";
	aptNames[z++]="loc=12";aptNames[z++]="loc=13";aptNames[z++]="loc=14";aptNames[z++]="loc=15";
	aptNames[z++]="loc=16";aptNames[z++]="loc=17";aptNames[z++]="loc=18";aptNames[z++]="loc=19";
	aptNames[z++]="loc=20";aptNames[z++]="loc=21";aptNames[z++]="loc=22";aptNames[z++]="loc=23";
	aptNames[z++]="loc=24";aptNames[z++]="loc=25";aptNames[z++]="loc=26";aptNames[z++]="loc=27";
	aptNames[z++]="loc=28";aptNames[z++]="loc=29";aptNames[z++]="loc=30";aptNames[z++]="loc=31";	
	aptNames[z++]="loc=32";aptNames[z++]="loc=33";aptNames[z++]="loc=34";aptNames[z++]="loc=35";
	aptNames[z++]="loc=36";aptNames[z++]="loc=37";aptNames[z++]="loc=38";aptNames[z++]="loc=39";	
	aptNames[z++]="loc=40";aptNames[z++]="loc=41";aptNames[z++]="loc=42";aptNames[z++]="loc=43";
	aptNames[z++]="loc=44";

	//setting up the links for which the polygons go to
	var address = new Array(numApts);
	var source = "http://www.coroomer.com/apartments";

	for(z=0;z<numApts;z++){
		address[z]= source.concat('?sch=00&');	
		address[z]= address[z].concat(aptNames[z]);
			
		
	}
	//Set up map
	var map = new google.maps.Map(document.getElementById("map_canvas"),setUpMap(numApts,page,homepage));
	//Setting up our icons
	var image = 'http://www.coroomer.com/images/map';
	var apartmentIcon = new google.maps.MarkerImage('../images/map/apartment.png');
	var bankIcon = new google.maps.MarkerImage('../images/map/bank.png');
	var busIcon = new google.maps.MarkerImage('../images/map/bus.png');
	var cafeIcon = new google.maps.MarkerImage('../images/map/cafe.png');
	var churchIcon = new google.maps.MarkerImage('../images/map/church.png');
	var gasIcon = new google.maps.MarkerImage('../images/map/gas.png');
	var mallIcon = new google.maps.MarkerImage('../images/map/mall.png');
	var movieIcon = new google.maps.MarkerImage('../images/map/movie.png');
	var restaurantIcon = new google.maps.MarkerImage('../images/map/restaurant.png');
	var superIcon = new google.maps.MarkerImage('../images/map/super.png');
	var UCSDIcon = new google.maps.MarkerImage('../images/map/ucsd.png');
	var arribaIcon = new google.maps.MarkerImage('../images/map/arriba.png');
	var nobelIcon = new google.maps.MarkerImage('../images/map/nobel.png');

	//----------------------------------------Starting the creation of POI markers------------------------------------------------------------//
	//Setting up POI coordinates
	var iwPOI = new Array(31);
	var counter =0;
	//Banks
	z=0;
	var bankLat = new Array(2);	var bankLng = new Array(2);	var bankInfo = new Array(2);
	bankLat[z] = 32.868159;bankLng[z] =-117.231717;bankInfo[z++] = "BOA<br />Citibank";
	bankLat[z] = 32.869421;bankLng[z] =-117.231395;bankInfo[z++] = "Chase Bank";
	for (var i=0;i<bankInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:bankInfo[i]});
		var point = new google.maps.LatLng(bankLat[i],bankLng[i]);
		setUpPoi(point,bankIcon,counter++,homepage);
	}
	//Arriba
	z=0;
	var arribaLat = new Array(2);	var arribaLng = new Array(2);	var arribaInfo = new Array(2);
	arribaLat[z] = 32.867231;arribaLng[z] =-117.219390;arribaInfo[z++] = "Arriba Shuttle Stop 1<br />202 Superloop - UCSD<br />*First stop, always able to get on";
	arribaLat[z] = 32.861481;arribaLng[z] =-117.223434;arribaInfo[z++] = "Arriba Shuttle Stop 2<br />202 Superloop - UCSD<br />*Can't get on bus sometimes during peak hours";
	arribaLat[z] = 32.865077;arribaLng[z] =-117.225108;arribaInfo[z++] = "Arriba Shuttle Stop 3<br />202 Superloop - UCSD<br />*Expect 2-3 full buses to pass you during peak hours";
	for (var i=0;i<arribaInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:arribaInfo[i]});
		var point = new google.maps.LatLng(arribaLat[i],arribaLng[i]);
		setUpPoi(point,arribaIcon,counter++,homepage);
	}
	//Nobel
	z=0;
	var nobelLat = new Array(2);	var nobelLng = new Array(2);	var nobelInfo = new Array(2);
	nobelLat[z] = 32.868592;nobelLng[z] =-117.225258;nobelInfo[z++] = "Nobel Shuttle Stop 1<br />202 Superloop - UCSD<br />*Basically everyone gets on and off here";
	nobelLat[z] = 32.867988;nobelLng[z] =-117.231642;nobelInfo[z++] = "Nobel Shuttle Stop 2<br />202 Superloop - UCSD<br />*Sometimes can't get on bus during peak hours";
	for (var i=0;i<nobelInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:nobelInfo[i]});
		var point = new google.maps.LatLng(nobelLat[i],nobelLng[i]);
		setUpPoi(point,nobelIcon,counter++,homepage);
	}
	//Bus
	z=0;
	var busLat = new Array(17);	var busLng = new Array(17);	var busInfo = new Array(5);
	busLat[z] = 32.875164;busLng[z] =-117.217735;busInfo[z++] = "201 Superloop - UCSD";
	busLat[z] = 32.867219;busLng[z] =-117.218615;busInfo[z++] = "201 Superloop - UTC";
	busLat[z] = 32.864154;busLng[z] =-117.235752;busInfo[z++] = "201 Superloop - UTC";
	busLat[z] = 32.877159;busLng[z] =-117.235824;busInfo[z++] = "201 Superloop - UCSD Stop";
	busLat[z] = 32.864641;busLng[z] =-117.236226;busInfo[z++] = "202 Superloop - UCSD<br />150 - UCSD<br />*202 comes every 15 mins but bus is full during peak hours";
	busLat[z] = 32.876898;busLng[z] =-117.235524;busInfo[z++] = "202 Superloop - UCSD Stop";
	busLat[z] = 32.875078;busLng[z] =-117.217778;busInfo[z++] = "202 Superloop - UTC";
	busLat[z] = 32.878006;busLng[z] =-117.239289;busInfo[z++] = "Arriba/Nobel Shuttles";
	busLat[z] = 32.871774;busLng[z] =-117.217941;busInfo[z++] = "MTS Buses to UCSD";
	busLat[z] = 32.871211;busLng[z] =-117.223880;busInfo[z++] = "MTS Buses to UCSD";
	busLat[z] = 32.870600;busLng[z] =-117.223239;busInfo[z++] = "MTS Buses to UTC";
	busLat[z] = 32.871468;busLng[z] =-117.217869;busInfo[z++] = "MTS Buses to UTC";
	for (var i=0;i<busInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:busInfo[i]});
		var point = new google.maps.LatLng(busLat[i],busLng[i]);
		setUpPoi(point,busIcon,counter++,homepage);
	}
	//Church
	z=0;
	var churchLat = new Array(1);	var churchLng = new Array(1);	var churchInfo = new Array(1);
	churchLat[z] = 32.866321;	churchLng[z] =-117.228702;	churchInfo[z++] = "REALLY BIG CHURCH";
	for (var i=0;i<churchInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:churchInfo[i]});
		var point = new google.maps.LatLng(churchLat[i],churchLng[i]);
		setUpPoi(point,churchIcon,counter++,homepage);
	}
	//Gas
	z=0;
	var gasLat = new Array(2);	var gasLng = new Array(2);	var gasInfo = new Array(2);
	gasLat[z] = 32.871238;	gasLng[z] =-117.233326;	gasInfo[z++] = "Mobil";
	gasLat[z] = 32.866872;	gasLng[z] =-117.215978;	gasInfo[z++] = "Chevron";
	for (var i=0;i<gasInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:gasInfo[i]});
		var point = new google.maps.LatLng(gasLat[i],gasLng[i]);
		setUpPoi(point,gasIcon,counter++,homepage);
	}
	//Restaurants
	z=0;
	var restaurantLat = new Array(11);	var restaurantLng = new Array(11);	var restaurantInfo = new Array(11);
	restaurantLat[z] = 32.868997;	restaurantLng[z] =-117.232854;	restaurantInfo[z++] = "BJ's";
	restaurantLat[z] = 32.865654;	restaurantLng[z] =-117.232157;	restaurantInfo[z++] = "Chipotle";
	restaurantLat[z] = 32.866789;	restaurantLng[z] =-117.215356;	restaurantInfo[z++] = "McDonalds";
	restaurantLat[z] = 32.867548;	restaurantLng[z] =-117.231527;	restaurantInfo[z++] = "Islands Burger";
	restaurantLat[z] = 32.86766;	restaurantLng[z] =-117.231017;	restaurantInfo[z++] = "California Pizza Kitchen";
	restaurantLat[z] = 32.873142;	restaurantLng[z] =-117.217603;	restaurantInfo[z++] = "Regents Pizzaria";
	restaurantLat[z] = 32.872854;	restaurantLng[z] =-117.217292;	restaurantInfo[z++] = "L&L Hawaiian BBQ";
	restaurantLat[z] = 32.869573;	restaurantLng[z] =-117.215392;	restaurantInfo[z++] = "Five Guys Burger<br />Subway";
	restaurantLat[z] = 32.862812;	restaurantLng[z] =-117.224668;	restaurantInfo[z++] = "Tapioca Express";
	restaurantLat[z] = 32.862681;	restaurantLng[z] =-117.22429;	restaurantInfo[z++] = "Los Primos Mexican Food";
	restaurantLat[z] = 32.862438;	restaurantLng[z] =-117.224751;	restaurantInfo[z++] = "Leucadia Pizzaria";
	for (var i=0;i<restaurantInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:restaurantInfo[i]});
		var point = new google.maps.LatLng(restaurantLat[i],restaurantLng[i]);
		setUpPoi(point,restaurantIcon,counter++,homepage);
	}
	//Malls
	z=0;
	var mallLat = new Array(1);	var mallLng = new Array(1);	var mallInfo = new Array(1);
	mallLat[z] = 32.870842;	mallLng[z] =-117.210774; mallInfo[z++] = "Westfield UTC";
	for (var i=0;i<mallInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:mallInfo[i]});
		var point = new google.maps.LatLng(mallLat[i],mallLng[i]);
		setUpPoi(point,mallIcon,counter++,homepage);
	}
	//SuperMarkets
	z=0;
	var superLat = new Array(5);	var superLng = new Array(5);	var superInfo = new Array(5);
	superLat[z] = 32.862590;	superLng[z] =-117.223574;	superInfo[z++] = "Vons";
	superLat[z] = 32.865906;	superLng[z] =-117.232028;	superInfo[z++] = "Ralphs";
	superLat[z] = 32.865519;	superLng[z] =-117.232243;	superInfo[z++] = "Trader Joes";
	superLat[z] = 32.867420;	superLng[z] =-117.215334;	superInfo[z++] = "Bristol Farms";
	superLat[z] = 32.868664;	superLng[z] =-117.230698;	superInfo[z++] = "Whole Foods";
	for (var i=0;i<superInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:superInfo[i]});
		var point = new google.maps.LatLng(superLat[i],superLng[i]);
		setUpPoi(point,superIcon,counter++,homepage);
	}
	//UCSD
	z=0;
	var UCSDLat = new Array(1);	var UCSDLng = new Array(1); var UCSDInfo = new Array(1);
	UCSDLat[z] = 32.877523;	UCSDLng[z] =-117.22985; UCSDInfo[z++] = "University of California - San Diego";
	for (var i=0;i<UCSDInfo.length;i++) {
		iwPOI[counter] = new google.maps.InfoWindow({content:UCSDInfo[i]});
		var point = new google.maps.LatLng(UCSDLat[i],UCSDLng[i]);
		setUpPoi(point,UCSDIcon,counter++,homepage);
	}
	//----------------------------------------Starting the creation of Polygons for Apartments------------------------------------------------//
	//Creating Polygons for the apartments
	//Setting up APT info, a total of 48
	//Setting the position of the iwAPT to their corresponding apartments
	var iwAPT = new Array(numApts);
	
	var polyArray = new Array(numApts);	
	var page = window.location.pathname;	
	z = 0;
	
	//Setting up polygons
	if(page.match(/apartments/)){
		while(z<aptNames.length){
			iwAPT[z] = new google.maps.InfoWindow({content:apartmentsInfo[z]});
			var pointer = new google.maps.LatLng(apartmentsLat[z],apartmentsLng[z]);
			iwAPT[z].setPosition(pointer);	

			if(apartmentsCondo[z]==1)
				setUpPoly(z,homepage,"purple");
			else
				setUpPoly(z,homepage,"blue");

			if(url.match(aptNames[z])){
				polyArray[z].setMap(null);
				setUpPoly(z,homepage,"green");
			}
			z++;			
		}
	}

	else{
		for(var i =0; i<iwAPT.length;i++){
			iwAPT[i] = new google.maps.InfoWindow({content:apartmentsInfo[i]});
			var pointer = new google.maps.LatLng(apartmentsLat[i],apartmentsLng[i]);
			iwAPT[i].setPosition(pointer);

			if(apartmentsCondo[i]==1)
				setUpPoly(i,homepage,"purple");
			else
				setUpPoly(i,homepage,"blue");
		}	
	}

	//Open the google centers on the apartment according the to current page
	if(!homepage)
		iwAPT[updateAPMTID(aptNames,page)].open(map);

	//This function returns the APMTID based on our current page
	function updateAPMTID(aptNames,page){
		var z=0;
		while(z<aptNames.length){
			if(url.match(aptNames[z]))
				return z;
			z++;
		}
		return z;
	}	

	//This function checks if we are on the home page.
	function checkHomePage(){
		var temp = true;
		if(page.match(/apartments/))
			temp = false;	
		return temp;			
	}
	//Clear other info windows so the a new one can show up
	function clearWindows(numApts){
		for(var q =0;q < numApts;q++){iwAPT[q].close(map);}
		for(var q =0;q < 31;q++){iwPOI[q].close(map);}

	}
	//As the function name suggests, this function sets up apartment info windows
	function setUpApt(polygon,id,homepage,address){
		if(homepage){
			google.maps.event.addListener(polygon,"mouseover", function(){clearWindows(numApts)});		
			google.maps.event.addListener(polygon,"mouseover", function(){iwAPT[id].open(map);});
			google.maps.event.addListener(polygon,"mouseout", function(){clearWindows(numApts)});	
		}	
		google.maps.event.addListener(polygon,"click", function(){window.location = address[id]});

		
	}
	/*google.maps.event.addListener(polygon,"click", function(){ var newwin=window.open(address[id],'_blank');newwin.focus();return false;}); */

	//As the function name suggests, this function sets up POIs" info windows
	function setUpPoi(point,image,x,homepage){
		var marker = new google.maps.Marker({position: point,icon: image,map: map});

		if(homepage){
			google.maps.event.addListener(marker, "click", function() {clearWindows(numApts)});
			google.maps.event.addListener(marker, "click", function() {iwPOI[x].open(map,marker);});
		}

		else{
			google.maps.event.addListener(marker, "click", function() {for(var q =0;q < 31;q++){iwPOI[q].close(map);}});
			google.maps.event.addListener(marker, "click", function() {iwPOI[x].open(map,marker);});
		}
	} 

	function setUpPoly(num,homepage,color){
		var shading;
		var fill;
		if(color=="blue"){
			shading = "#19CCE6";
			fill = 0.5;
		}

		else if(color=="purple"){
			shading = "#7F00FF";
			fill = 0.5;
		}

		else{
			shading = "#00FF00";
			fill = .75;
		}

		polyArray[num] = new google.maps.Polygon({ Paths: path[num], strokeColor: "#000000", strokeOpacity: .6, strokeWeight: 1, fillColor: shading, fillOpacity: fill});
		polyArray[num].setMap(map);
		polyArray[num].position = new google.maps.LatLng(apartmentsLat[num],apartmentsLng[num]);

		if(homepage)
			setUpApt(polyArray[num],num,homepage,address);

		else
			setUpApt(polyArray[num],num,false,address);
	}


	function setUpMap(numApts,page,homepage){	
		//APMTID is a global variable, it tells us which apartment we are dealing with
		//APMITD==44 means homepage
		//Update the APMTID
		var APMTID = updateAPMTID(aptNames,page);
		var scrollwheel = false;

		if(homepage)
			scrollwheel = false;
		//Center the map
		var centerMap = new google.maps.LatLng(apartmentsLat[APMTID],apartmentsLng[APMTID]);

		//Changing zoom, if we are on the homepage, the zoom will be 15 so more of the map can be seen
		var zoom = 15;
		//if(APMTID>numApts)
		//	zoom = 15;

		var myOptions = {zoom: zoom,center: centerMap,mapTypeId: google.maps.MapTypeId.ROADMAP, mapTypeControl: true,
			mapTypeControlOptions:{style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,position: google.maps.ControlPosition.TOP_RIGHT},
			scaleControl: false,scaleControlOptions:{position: google.maps.ControlPosition.TOP_LEFT},
			streetViewControl: true,streetViewControlOptions: {position: google.maps.ControlPosition.TOP_LEFT},zoomControl: true,scrollwheel:scrollwheel,
			zoomControlOptions: {style: google.maps.ZoomControlStyle.LARGE,position: google.maps.ControlPosition.CENTER_LEFT}
		}
		return myOptions;
	}
}	
/*
//Used for finding coordinates of apartment polygons
function pointFinder(location) {
var marker = new google.maps.Marker({position: location, map: map });	
var iwAPT99 = new google.maps.InfoWindow({content:location.toString()});
google.maps.event.addListener(marker, 'click', function() {iwAPT99.open(map,marker);});
}

google.maps.event.addListener(map, 'click', function(event) {pointFinder(event.latLng);});
*/