var path = new Array(46);
	var xx = 0;
	//Mapping coordinates for Archstone La Jolla
	var archstonePath = [
	new google.maps.LatLng(32.866812,-117.237151),new google.maps.LatLng(32.866813,-117.237133),new google.maps.LatLng(32.866813,-117.237093),
    new google.maps.LatLng(32.866791,-117.237061),new google.maps.LatLng(32.866782,-117.237031),new google.maps.LatLng(32.866779,-117.236991),
    new google.maps.LatLng(32.866788,-117.236935),new google.maps.LatLng(32.866811,-117.236844),new google.maps.LatLng(32.866838,-117.236744),
    new google.maps.LatLng(32.866919,-117.236508),new google.maps.LatLng(32.866973,-117.236457),new google.maps.LatLng(32.867020,-117.236417),
    new google.maps.LatLng(32.867020,-117.236361),new google.maps.LatLng(32.867023,-117.236275),new google.maps.LatLng(32.867025,-117.236186),
    new google.maps.LatLng(32.866838,-117.236077),new google.maps.LatLng(32.866570,-117.235958),new google.maps.LatLng(32.866354,-117.235882),
    new google.maps.LatLng(32.866381,-117.235752),new google.maps.LatLng(32.866317,-117.235599),new google.maps.LatLng(32.866223,-117.235411),
    new google.maps.LatLng(32.865980,-117.235178),new google.maps.LatLng(32.865912,-117.235030),new google.maps.LatLng(32.865864,-117.235012),
    new google.maps.LatLng(32.865793,-117.234974),new google.maps.LatLng(32.865720,-117.234953),new google.maps.LatLng(32.865720,-117.234864),
    new google.maps.LatLng(32.865673,-117.234792),new google.maps.LatLng(32.865680,-117.234725),new google.maps.LatLng(32.865484,-117.234636),
    new google.maps.LatLng(32.865506,-117.234540),new google.maps.LatLng(32.865419,-117.234489),new google.maps.LatLng(32.865360,-117.234440),
    new google.maps.LatLng(32.865313,-117.234379),new google.maps.LatLng(32.865261,-117.234304),new google.maps.LatLng(32.865216,-117.234277),
    new google.maps.LatLng(32.865153,-117.234279),new google.maps.LatLng(32.865110,-117.234293),new google.maps.LatLng(32.865030,-117.234399),
    new google.maps.LatLng(32.864971,-117.234477),new google.maps.LatLng(32.864895,-117.234593),new google.maps.LatLng(32.864811,-117.234711),
    new google.maps.LatLng(32.864712,-117.234895),new google.maps.LatLng(32.864622,-117.235055),new google.maps.LatLng(32.864529,-117.235288),
    new google.maps.LatLng(32.864502,-117.235382),new google.maps.LatLng(32.864463,-117.235489),new google.maps.LatLng(32.864425,-117.235610),
    new google.maps.LatLng(32.864387,-117.235775),new google.maps.LatLng(32.864352,-117.235968),new google.maps.LatLng(32.864338,-117.236024),
    new google.maps.LatLng(32.864338,-117.236047),new google.maps.LatLng(32.864346,-117.236070),new google.maps.LatLng(32.864359,-117.236094),
    new google.maps.LatLng(32.864370,-117.236107),new google.maps.LatLng(32.864390,-117.236122),new google.maps.LatLng(32.864435,-117.236137),
    new google.maps.LatLng(32.864488,-117.236153),new google.maps.LatLng(32.864546,-117.236169),new google.maps.LatLng(32.864600,-117.236197),
    new google.maps.LatLng(32.864695,-117.236235),new google.maps.LatLng(32.864777,-117.236266),new google.maps.LatLng(32.864885,-117.236314),
    new google.maps.LatLng(32.865009,-117.236362),new google.maps.LatLng(32.865180,-117.236440),new google.maps.LatLng(32.865324,-117.236506),
    new google.maps.LatLng(32.865611,-117.236625),new google.maps.LatLng(32.865902,-117.236756),new google.maps.LatLng(32.866133,-117.236854),
    new google.maps.LatLng(32.866262,-117.236915),new google.maps.LatLng(32.866443,-117.236994),new google.maps.LatLng(32.866633,-117.237073),
    new google.maps.LatLng(32.866774,-117.237135)
	];path[xx++]=archstonePath;
	
	//Mapping coordinates for Archstone La Jolla Colony
	var archstonecolonyPath = [
	new google.maps.LatLng(32.863366,-117.229095),new google.maps.LatLng(32.863509,-117.227679),new google.maps.LatLng(32.863545,-117.227303),
    new google.maps.LatLng(32.863526,-117.227174),new google.maps.LatLng(32.863546,-117.227054),new google.maps.LatLng(32.863424,-117.227075),
    new google.maps.LatLng(32.863234,-117.227037),new google.maps.LatLng(32.862890,-117.227041),new google.maps.LatLng(32.862730,-117.227032),
    new google.maps.LatLng(32.862387,-117.227063),new google.maps.LatLng(32.862350,-117.227123),new google.maps.LatLng(32.862209,-117.227421),
    new google.maps.LatLng(32.862172,-117.227519),new google.maps.LatLng(32.862174,-117.227617),new google.maps.LatLng(32.862199,-117.227932),
    new google.maps.LatLng(32.862245,-117.228588),new google.maps.LatLng(32.862306,-117.228835),new google.maps.LatLng(32.862517,-117.228845),
    new google.maps.LatLng(32.862653,-117.228865),new google.maps.LatLng(32.862803,-117.228904),new google.maps.LatLng(32.862996,-117.228971),
    new google.maps.LatLng(32.863254,-117.229056)
	];path[xx++]=archstonecolonyPath;

	//Mapping coordinates for Archstone UTC
	var archStoneUTCPath = [
	new google.maps.LatLng(32.866197,-117.210690),new google.maps.LatLng(32.866227,-117.210694),new google.maps.LatLng(32.866599,-117.210391),
	new google.maps.LatLng(32.866557,-117.210287),new google.maps.LatLng(32.866477,-117.210169),new google.maps.LatLng(32.866393,-117.210032),
	new google.maps.LatLng(32.866316,-117.209933),new google.maps.LatLng(32.865993,-117.209546),new google.maps.LatLng(32.865592,-117.209064),
	new google.maps.LatLng(32.865471,-117.208915),new google.maps.LatLng(32.865393,-117.208822),new google.maps.LatLng(32.865147,-117.208565),
	new google.maps.LatLng(32.865080,-117.208475),new google.maps.LatLng(32.865018,-117.208404),new google.maps.LatLng(32.864962,-117.208378),
	new google.maps.LatLng(32.864865,-117.208362),new google.maps.LatLng(32.864752,-117.208339),new google.maps.LatLng(32.863194,-117.208496),
	new google.maps.LatLng(32.863145,-117.208507),new google.maps.LatLng(32.863082,-117.208566),new google.maps.LatLng(32.863019,-117.208625),
	new google.maps.LatLng(32.862289,-117.210631),new google.maps.LatLng(32.862262,-117.210717),new google.maps.LatLng(32.862253,-117.210835),
	new google.maps.LatLng(32.862275,-117.210975),new google.maps.LatLng(32.863073,-117.211705),new google.maps.LatLng(32.863375,-117.211123),
	new google.maps.LatLng(32.863398,-117.211068),new google.maps.LatLng(32.863333,-117.210985),new google.maps.LatLng(32.863285,-117.210886),
	new google.maps.LatLng(32.863256,-117.210807),new google.maps.LatLng(32.863234,-117.210655),new google.maps.LatLng(32.863242,-117.210543),
	new google.maps.LatLng(32.863307,-117.210173),new google.maps.LatLng(32.863323,-117.210039),new google.maps.LatLng(32.863339,-117.209922),
	new google.maps.LatLng(32.863384,-117.209702),new google.maps.LatLng(32.863441,-117.209579),new google.maps.LatLng(32.863549,-117.209436),
	new google.maps.LatLng(32.863614,-117.209368),new google.maps.LatLng(32.863684,-117.209333),new google.maps.LatLng(32.863767,-117.209295),
	new google.maps.LatLng(32.864178,-117.210115),new google.maps.LatLng(32.864195,-117.210135),new google.maps.LatLng(32.864245,-117.210135),
	new google.maps.LatLng(32.864362,-117.210103),new google.maps.LatLng(32.864418,-117.210106),new google.maps.LatLng(32.864487,-117.210115),
	new google.maps.LatLng(32.864555,-117.210157),new google.maps.LatLng(32.864635,-117.210351),new google.maps.LatLng(32.864667,-117.210398),
	new google.maps.LatLng(32.864713,-117.210406),new google.maps.LatLng(32.864781,-117.210372),new google.maps.LatLng(32.865144,-117.210012),
	new google.maps.LatLng(32.865174,-117.209985),new google.maps.LatLng(32.865222,-117.209982),new google.maps.LatLng(32.865272,-117.210018),
	new google.maps.LatLng(32.865322,-117.210089),new google.maps.LatLng(32.865567,-117.210429),new google.maps.LatLng(32.865598,-117.210464),
	new google.maps.LatLng(32.865660,-117.210497),new google.maps.LatLng(32.865745,-117.210525),new google.maps.LatLng(32.865830,-117.210548),
	new google.maps.LatLng(32.865887,-117.210552),new google.maps.LatLng(32.865930,-117.210520),new google.maps.LatLng(32.865986,-117.210504),
	new google.maps.LatLng(32.866034,-117.210502),new google.maps.LatLng(32.866074,-117.210517),new google.maps.LatLng(32.866175,-117.210665),
	new google.maps.LatLng(32.866197,-117.210690),new google.maps.LatLng(32.866227,-117.210694)
	];path[xx++]=archStoneUTCPath;

	//Mapping coordinates for Barcelona	
/*	var barcelonaPath = [
	new google.maps.LatLng(32.859504,-117.229442),new google.maps.LatLng(32.859448,-117.228731),new google.maps.LatLng(32.859394,-117.227911),
    new google.maps.LatLng(32.859347,-117.227573),new google.maps.LatLng(32.859279,-117.227350),new google.maps.LatLng(32.859248,-117.227098),
    new google.maps.LatLng(32.859288,-117.226779),new google.maps.LatLng(32.859405,-117.226371),new google.maps.LatLng(32.859484,-117.226111),
    new google.maps.LatLng(32.859682,-117.225438),new google.maps.LatLng(32.859766,-117.225121),new google.maps.LatLng(32.859615,-117.225038),
    new google.maps.LatLng(32.859367,-117.224947),new google.maps.LatLng(32.859234,-117.224923),new google.maps.LatLng(32.859117,-117.224915),
    new google.maps.LatLng(32.858948,-117.224915),new google.maps.LatLng(32.858797,-117.224944),new google.maps.LatLng(32.858710,-117.224971),
    new google.maps.LatLng(32.858597,-117.225026),new google.maps.LatLng(32.858484,-117.225086),new google.maps.LatLng(32.858409,-117.225145),
    new google.maps.LatLng(32.858333,-117.225207),new google.maps.LatLng(32.858199,-117.225344),new google.maps.LatLng(32.858109,-117.225452),
    new google.maps.LatLng(32.858021,-117.225601),new google.maps.LatLng(32.857923,-117.225792),new google.maps.LatLng(32.857807,-117.226022),
    new google.maps.LatLng(32.857567,-117.226505),new google.maps.LatLng(32.857415,-117.226805),new google.maps.LatLng(32.857271,-117.227088),
    new google.maps.LatLng(32.857223,-117.227204),new google.maps.LatLng(32.857153,-117.227504),new google.maps.LatLng(32.857138,-117.227780),
    new google.maps.LatLng(32.857146,-117.228016),new google.maps.LatLng(32.857192,-117.228224),new google.maps.LatLng(32.857241,-117.228393),
    new google.maps.LatLng(32.857307,-117.228538),new google.maps.LatLng(32.857431,-117.228745),new google.maps.LatLng(32.857506,-117.228841),
    new google.maps.LatLng(32.857577,-117.228922),new google.maps.LatLng(32.857722,-117.229044),new google.maps.LatLng(32.857832,-117.229119),
    new google.maps.LatLng(32.857909,-117.229169),new google.maps.LatLng(32.857998,-117.229205),new google.maps.LatLng(32.858156,-117.229265),
    new google.maps.LatLng(32.858357,-117.229337),new google.maps.LatLng(32.858621,-117.229433),new google.maps.LatLng(32.858830,-117.229472)
	];path[xx++]=barcelonaPath;
	
*/
	//Mapping coordinates for Cambridge
	var cambridgePath = [
	new google.maps.LatLng(32.869012,-117.236294),new google.maps.LatLng(32.869059,-117.235621),new google.maps.LatLng(32.869064,-117.235516),
    new google.maps.LatLng(32.869075,-117.234776),new google.maps.LatLng(32.869100,-117.233939),new google.maps.LatLng(32.869034,-117.233925),
    new google.maps.LatLng(32.868917,-117.233901),new google.maps.LatLng(32.868800,-117.233877),new google.maps.LatLng(32.868692,-117.233850),
    new google.maps.LatLng(32.868521,-117.233813),new google.maps.LatLng(32.868377,-117.233778),new google.maps.LatLng(32.868160,-117.233722),
    new google.maps.LatLng(32.868095,-117.233701),new google.maps.LatLng(32.868097,-117.234220),new google.maps.LatLng(32.868109,-117.234837),
    new google.maps.LatLng(32.868095,-117.235489),new google.maps.LatLng(32.868151,-117.236071),new google.maps.LatLng(32.868372,-117.236162),
    new google.maps.LatLng(32.868692,-117.236237)
	];path[xx++]=cambridgePath;	
	
	//Mapping coordinates for Cambridge
	var canyonParkPath = [
	
	new google.maps.LatLng(32.880512,-117.216925),new google.maps.LatLng(32.880553,-117.216917),new google.maps.LatLng(32.880940,-117.216662),
	new google.maps.LatLng(32.880976,-117.216641),new google.maps.LatLng(32.881025,-117.216628),new google.maps.LatLng(32.881067,-117.216609),
	new google.maps.LatLng(32.881115,-117.216582),new google.maps.LatLng(32.881316,-117.216472),new google.maps.LatLng(32.881328,-117.216461),
	new google.maps.LatLng(32.881330,-117.216444),new google.maps.LatLng(32.881323,-117.216421),new google.maps.LatLng(32.881176,-117.216025),
	new google.maps.LatLng(32.881162,-117.216005),new google.maps.LatLng(32.881141,-117.216004),new google.maps.LatLng(32.880940,-117.216109),
	new google.maps.LatLng(32.880839,-117.216154),new google.maps.LatLng(32.880791,-117.216180),new google.maps.LatLng(32.880773,-117.216177),
	new google.maps.LatLng(32.880757,-117.216166),new google.maps.LatLng(32.880619,-117.216083),new google.maps.LatLng(32.880600,-117.216072),
	new google.maps.LatLng(32.880579,-117.216049),new google.maps.LatLng(32.880342,-117.215458),new google.maps.LatLng(32.880090,-117.214893),
	new google.maps.LatLng(32.880055,-117.214824),new google.maps.LatLng(32.880020,-117.214753),new google.maps.LatLng(32.879992,-117.214682),
	new google.maps.LatLng(32.879964,-117.214620),new google.maps.LatLng(32.879937,-117.214556),new google.maps.LatLng(32.879901,-117.214452),
	new google.maps.LatLng(32.879861,-117.214256),new google.maps.LatLng(32.879826,-117.214160),new google.maps.LatLng(32.879799,-117.214144),
	new google.maps.LatLng(32.879747,-117.214105),new google.maps.LatLng(32.879412,-117.213949),new google.maps.LatLng(32.879223,-117.213874),
	new google.maps.LatLng(32.879120,-117.213841),new google.maps.LatLng(32.879054,-117.213825),new google.maps.LatLng(32.879036,-117.213837),
	new google.maps.LatLng(32.879009,-117.213896),new google.maps.LatLng(32.878836,-117.214204),new google.maps.LatLng(32.878815,-117.214235),
	new google.maps.LatLng(32.878807,-117.214267),new google.maps.LatLng(32.878814,-117.214303),new google.maps.LatLng(32.878830,-117.214336),
	new google.maps.LatLng(32.878884,-117.214372),new google.maps.LatLng(32.878974,-117.214440),new google.maps.LatLng(32.879042,-117.214496),
	new google.maps.LatLng(32.879092,-117.214541),new google.maps.LatLng(32.879170,-117.214613),new google.maps.LatLng(32.879255,-117.214698),
	new google.maps.LatLng(32.879406,-117.214856),new google.maps.LatLng(32.879461,-117.214940),new google.maps.LatLng(32.879530,-117.215029),
	new google.maps.LatLng(32.879610,-117.215135),new google.maps.LatLng(32.879692,-117.215280),new google.maps.LatLng(32.879737,-117.215352),
	new google.maps.LatLng(32.879806,-117.215484),new google.maps.LatLng(32.879880,-117.215640),new google.maps.LatLng(32.880237,-117.216381),
	new google.maps.LatLng(32.880499,-117.216910)

	];path[xx++]=canyonParkPath;		
	
	//Mapping coordinates for Cape of La Jolla		
	/*	
	var capeofLaJollaPath = [
	new google.maps.LatLng(32.863638,-117.233046),new google.maps.LatLng(32.863743,-117.233083),new google.maps.LatLng(32.863768,-117.232745),
    new google.maps.LatLng(32.863773,-117.232190),new google.maps.LatLng(32.863783,-117.231423),new google.maps.LatLng(32.863798,-117.230645),
    new google.maps.LatLng(32.863645,-117.230672),new google.maps.LatLng(32.863405,-117.230688),new google.maps.LatLng(32.863190,-117.230681),
    new google.maps.LatLng(32.862995,-117.230683),new google.maps.LatLng(32.862837,-117.230661),new google.maps.LatLng(32.862625,-117.230602),
    new google.maps.LatLng(32.862316,-117.230519),new google.maps.LatLng(32.861779,-117.230552),new google.maps.LatLng(32.861780,-117.230614),
    new google.maps.LatLng(32.861763,-117.231236),new google.maps.LatLng(32.861751,-117.232060),new google.maps.LatLng(32.861726,-117.232882),
    new google.maps.LatLng(32.861684,-117.232988),new google.maps.LatLng(32.861667,-117.233015),new google.maps.LatLng(32.861659,-117.233059),
    new google.maps.LatLng(32.861740,-117.233031),new google.maps.LatLng(32.861835,-117.233007),new google.maps.LatLng(32.861961,-117.232985),
    new google.maps.LatLng(32.862077,-117.232956),new google.maps.LatLng(32.862219,-117.232933),new google.maps.LatLng(32.862458,-117.232905),
    new google.maps.LatLng(32.862667,-117.232898),new google.maps.LatLng(32.862827,-117.232909),new google.maps.LatLng(32.863042,-117.232916),
    new google.maps.LatLng(32.863288,-117.232954),new google.maps.LatLng(32.863504,-117.233000)
	];path[xx++]=capeofLaJollaPath;	
	
	*/
	//Mapping coordinates for Costa Verda North
	var costaVerdePath = [
	new google.maps.LatLng(32.871332,-117.218134),new google.maps.LatLng(32.871357,-117.218102),new google.maps.LatLng(32.871510,-117.217774),
    new google.maps.LatLng(32.871596,-117.217530),new google.maps.LatLng(32.871686,-117.217231),new google.maps.LatLng(32.871884,-117.216327),
    new google.maps.LatLng(32.871880,-117.216251),new google.maps.LatLng(32.871847,-117.216215),new google.maps.LatLng(32.871554,-117.216128),
    new google.maps.LatLng(32.871392,-117.216108),new google.maps.LatLng(32.871246,-117.216099),new google.maps.LatLng(32.871118,-117.216109),
    new google.maps.LatLng(32.870940,-117.216136),new google.maps.LatLng(32.870767,-117.216176),new google.maps.LatLng(32.870485,-117.216321),
	new google.maps.LatLng(32.869415,-117.216960),new google.maps.LatLng(32.869177,-117.217067),new google.maps.LatLng(32.868629,-117.217121),
	new google.maps.LatLng(32.868211,-117.217022),new google.maps.LatLng(32.867866,-117.216874),new google.maps.LatLng(32.867518,-117.216706),
	new google.maps.LatLng(32.867222,-117.216609),new google.maps.LatLng(32.866998,-117.216580),new google.maps.LatLng(32.866810,-117.216597),
	new google.maps.LatLng(32.866769,-117.216614),new google.maps.LatLng(32.866737,-117.216669),new google.maps.LatLng(32.866729,-117.216757),
	new google.maps.LatLng(32.867161,-117.217780),new google.maps.LatLng(32.867381,-117.218216),new google.maps.LatLng(32.867595,-117.218740),
	new google.maps.LatLng(32.867683,-117.218773),new google.maps.LatLng(32.867947,-117.218650),new google.maps.LatLng(32.868419,-117.218450),
	new google.maps.LatLng(32.868837,-117.218324),new google.maps.LatLng(32.869111,-117.218266),new google.maps.LatLng(32.869462,-117.218201),
	new google.maps.LatLng(32.869734,-117.218169),new google.maps.LatLng(32.869806,-117.218169),new google.maps.LatLng(32.870093,-117.218155),
	new google.maps.LatLng(32.871286,-117.218150)
	];path[xx++]=costaVerdePath;	
	
	//Mapping coordinates for Costa Verda South
	/*
	var costaVerdeSouthPath = [
	new google.maps.LatLng(32.869504,-117.218170),new google.maps.LatLng(32.869535,-117.218118),new google.maps.LatLng(32.869519,-117.217986),
    new google.maps.LatLng(32.869485,-117.217781),new google.maps.LatLng(32.869414,-117.217553),new google.maps.LatLng(32.869234,-117.217107),	
    new google.maps.LatLng(32.869209,-117.217076),new google.maps.LatLng(32.869177,-117.217067),new google.maps.LatLng(32.868629,-117.217121),
    new google.maps.LatLng(32.868211,-117.217022),new google.maps.LatLng(32.867866,-117.216874),new google.maps.LatLng(32.867518,-117.216706),
    new google.maps.LatLng(32.867222,-117.216609),new google.maps.LatLng(32.866998,-117.216580),new google.maps.LatLng(32.866810,-117.216597),
    new google.maps.LatLng(32.866769,-117.216614),new google.maps.LatLng(32.866737,-117.216669),new google.maps.LatLng(32.866729,-117.216757),	
    new google.maps.LatLng(32.867161,-117.217780),new google.maps.LatLng(32.867381,-117.218216),new google.maps.LatLng(32.867595,-117.218740),	
    new google.maps.LatLng(32.867683,-117.218773),new google.maps.LatLng(32.867947,-117.218650),new google.maps.LatLng(32.868419,-117.218450),	
    new google.maps.LatLng(32.868837,-117.218324),new google.maps.LatLng(32.869111,-117.218266),new google.maps.LatLng(32.869462,-117.218201)
	];path[xx++]=costaVerdeSouthPath;	
	*/
	//Mapping coordinates for Costa Verde Towers
	var costaVerdeTowersPath = [
	new google.maps.LatLng(32.871309,-117.215810),new google.maps.LatLng(32.871332,-117.215756),new google.maps.LatLng(32.871330,-117.215606),
    new google.maps.LatLng(32.871299,-117.215448),new google.maps.LatLng(32.871260,-117.215279),new google.maps.LatLng(32.871195,-117.215138),
    new google.maps.LatLng(32.871104,-117.215023),new google.maps.LatLng(32.871014,-117.214969),new google.maps.LatLng(32.870943,-117.214939),
    new google.maps.LatLng(32.870865,-117.214927),new google.maps.LatLng(32.870747,-117.214937),new google.maps.LatLng(32.870499,-117.215039),
    new google.maps.LatLng(32.868953,-117.216150),new google.maps.LatLng(32.869203,-117.216743),new google.maps.LatLng(32.869228,-117.216781),
    new google.maps.LatLng(32.869256,-117.216795),new google.maps.LatLng(32.869289,-117.216801),new google.maps.LatLng(32.869334,-117.216783),
    new google.maps.LatLng(32.870650,-117.216003),new google.maps.LatLng(32.870767,-117.215948),new google.maps.LatLng(32.870968,-117.215885),
    new google.maps.LatLng(32.871100,-117.215861),new google.maps.LatLng(32.871267,-117.215847)
	];path[xx++]=costaVerdeTowersPath;


	//Mapping coordinates for Dieguenos
	/*
	var dieguenosPath = [
	new google.maps.LatLng(32.863643,-117.222172),new google.maps.LatLng(32.863657,-117.222142),new google.maps.LatLng(32.863661,-117.222104),
    new google.maps.LatLng(32.863646,-117.222053),new google.maps.LatLng(32.863646,-117.222053),new google.maps.LatLng(32.863629,-117.222010),
    new google.maps.LatLng(32.863617,-117.221979),new google.maps.LatLng(32.863596,-117.221961),new google.maps.LatLng(32.863564,-117.221951),
    new google.maps.LatLng(32.863525,-117.221940),new google.maps.LatLng(32.863475,-117.221822),new google.maps.LatLng(32.863488,-117.221799),
    new google.maps.LatLng(32.863504,-117.221762),new google.maps.LatLng(32.863509,-117.221731),new google.maps.LatLng(32.863502,-117.221696),
    new google.maps.LatLng(32.863496,-117.221658),new google.maps.LatLng(32.863480,-117.221619),new google.maps.LatLng(32.863466,-117.221583),
    new google.maps.LatLng(32.863443,-117.221548),new google.maps.LatLng(32.863424,-117.221526),new google.maps.LatLng(32.863410,-117.221499),
    new google.maps.LatLng(32.863398,-117.221475),new google.maps.LatLng(32.863397,-117.221444),new google.maps.LatLng(32.863399,-117.221414),
    new google.maps.LatLng(32.863375,-117.221425),new google.maps.LatLng(32.863245,-117.221471),new google.maps.LatLng(32.863112,-117.221517),
    new google.maps.LatLng(32.862952,-117.221557),new google.maps.LatLng(32.862812,-117.221586),new google.maps.LatLng(32.862627,-117.221616),
    new google.maps.LatLng(32.862472,-117.221632),new google.maps.LatLng(32.862332,-117.221645),new google.maps.LatLng(32.862145,-117.221683),
    new google.maps.LatLng(32.861906,-117.221753),new google.maps.LatLng(32.861690,-117.221798),new google.maps.LatLng(32.861467,-117.221822),
    new google.maps.LatLng(32.861431,-117.221847),new google.maps.LatLng(32.861424,-117.221951),new google.maps.LatLng(32.861422,-117.222581),
    new google.maps.LatLng(32.861440,-117.222632),new google.maps.LatLng(32.861532,-117.222683),new google.maps.LatLng(32.861792,-117.222678),
    new google.maps.LatLng(32.862069,-117.222665),new google.maps.LatLng(32.862346,-117.222627),new google.maps.LatLng(32.862609,-117.222573),
    new google.maps.LatLng(32.862887,-117.222504),new google.maps.LatLng(32.863119,-117.222429),new google.maps.LatLng(32.863297,-117.222359),
    new google.maps.LatLng(32.863477,-117.222292),new google.maps.LatLng(32.863603,-117.222217),new google.maps.LatLng(32.863634,-117.222205)
	];path[xx++]=dieguenosPath;
	*/
	
	//Mapping coordinates for Eastbluff				
	var eastbluffPath = [
	new google.maps.LatLng(32.859461,-117.234486),new google.maps.LatLng(32.859385,-117.234128),new google.maps.LatLng(32.859322,-117.233786),
    new google.maps.LatLng(32.859249,-117.233362),new google.maps.LatLng(32.859207,-117.233113),new google.maps.LatLng(32.859082,-117.232384),
    new google.maps.LatLng(32.858957,-117.231718),new google.maps.LatLng(32.858898,-117.231161),new google.maps.LatLng(32.858460,-117.231202),
    new google.maps.LatLng(32.858162,-117.231234),new google.maps.LatLng(32.857960,-117.231259),new google.maps.LatLng(32.857603,-117.231308),
    new google.maps.LatLng(32.857672,-117.231784),new google.maps.LatLng(32.857765,-117.232305),new google.maps.LatLng(32.857888,-117.232995),
    new google.maps.LatLng(32.858050,-117.233805),new google.maps.LatLng(32.858233,-117.234981),new google.maps.LatLng(32.858426,-117.234943),
    new google.maps.LatLng(32.858582,-117.234903),new google.maps.LatLng(32.858716,-117.234856),new google.maps.LatLng(32.858873,-117.234801),
    new google.maps.LatLng(32.859075,-117.234717),new google.maps.LatLng(32.859234,-117.234628)
	];path[xx++]=eastbluffPath;

	//Mapping coordinates for Genesee Highlands
	var geneseeHighlandsPath = [
	new google.maps.LatLng(32.864018,-117.216374),new google.maps.LatLng(32.864050,-117.216345),new google.maps.LatLng(32.864055,-117.216162),
    new google.maps.LatLng(32.864053,-117.215729),new google.maps.LatLng(32.864061,-117.214858),new google.maps.LatLng(32.864068,-117.214149),
    new google.maps.LatLng(32.864068,-117.213923),new google.maps.LatLng(32.864071,-117.213865),new google.maps.LatLng(32.864056,-117.213802),
    new google.maps.LatLng(32.864047,-117.213703),new google.maps.LatLng(32.864040,-117.213581),new google.maps.LatLng(32.864047,-117.213496),
    new google.maps.LatLng(32.863896,-117.213457),new google.maps.LatLng(32.863641,-117.213402),new google.maps.LatLng(32.863441,-117.213362),
    new google.maps.LatLng(32.863220,-117.213282),new google.maps.LatLng(32.862978,-117.213279),new google.maps.LatLng(32.862820,-117.213275),
    new google.maps.LatLng(32.862604,-117.213201),new google.maps.LatLng(32.862370,-117.213128),new google.maps.LatLng(32.862245,-117.213048),
    new google.maps.LatLng(32.862080,-117.212980),new google.maps.LatLng(32.861844,-117.212910),new google.maps.LatLng(32.861725,-117.212870),
    new google.maps.LatLng(32.861649,-117.212834),new google.maps.LatLng(32.861491,-117.213118),new google.maps.LatLng(32.861328,-117.213413),
    new google.maps.LatLng(32.861254,-117.213570),new google.maps.LatLng(32.861170,-117.213862),new google.maps.LatLng(32.861081,-117.214123),
    new google.maps.LatLng(32.860999,-117.214328),new google.maps.LatLng(32.860926,-117.214506),new google.maps.LatLng(32.860849,-117.214462),
    new google.maps.LatLng(32.860770,-117.214638),new google.maps.LatLng(32.860662,-117.214878),new google.maps.LatLng(32.860502,-117.215202),
    new google.maps.LatLng(32.860406,-117.215393),new google.maps.LatLng(32.860315,-117.215602),new google.maps.LatLng(32.860246,-117.215759),
    new google.maps.LatLng(32.860124,-117.216031),new google.maps.LatLng(32.860040,-117.216239),new google.maps.LatLng(32.859971,-117.216439),
    new google.maps.LatLng(32.859894,-117.216557),new google.maps.LatLng(32.859849,-117.216648),new google.maps.LatLng(32.859819,-117.216895),
    new google.maps.LatLng(32.859802,-117.217116),new google.maps.LatLng(32.859792,-117.217394),new google.maps.LatLng(32.859801,-117.217477),
    new google.maps.LatLng(32.859870,-117.217592),new google.maps.LatLng(32.859978,-117.217848),new google.maps.LatLng(32.860160,-117.217931),
    new google.maps.LatLng(32.860337,-117.217962),new google.maps.LatLng(32.860655,-117.218070),new google.maps.LatLng(32.860975,-117.218123),
    new google.maps.LatLng(32.861243,-117.218137),new google.maps.LatLng(32.861185,-117.217880),new google.maps.LatLng(32.861137,-117.217703),
    new google.maps.LatLng(32.861083,-117.217520),new google.maps.LatLng(32.861050,-117.217439),new google.maps.LatLng(32.861048,-117.217274),
    new google.maps.LatLng(32.861082,-117.217158),new google.maps.LatLng(32.861178,-117.217053),new google.maps.LatLng(32.861283,-117.216993),
    new google.maps.LatLng(32.861440,-117.216857),new google.maps.LatLng(32.861664,-117.216704),new google.maps.LatLng(32.861802,-117.216644),
    new google.maps.LatLng(32.862092,-117.216533),new google.maps.LatLng(32.862286,-117.216457),new google.maps.LatLng(32.862371,-117.216428),
    new google.maps.LatLng(32.862507,-117.216400),new google.maps.LatLng(32.862637,-117.216394),new google.maps.LatLng(32.862856,-117.216373),
    new google.maps.LatLng(32.863178,-117.216380),new google.maps.LatLng(32.863764,-117.216386),new google.maps.LatLng(32.863976,-117.216397)
	];path[xx++]=geneseeHighlandsPath;

	//Mapping coordinates for La Jolla Crossroads
	var laJollaCrossroadsPath = [
	new google.maps.LatLng(32.873891,-117.205160),new google.maps.LatLng(32.873894,-117.205140),new google.maps.LatLng(32.873944,-117.205090),
    new google.maps.LatLng(32.873982,-117.204980),new google.maps.LatLng(32.874089,-117.204612),new google.maps.LatLng(32.874176,-117.204282),
    new google.maps.LatLng(32.874185,-117.204219),new google.maps.LatLng(32.874189,-117.204147),new google.maps.LatLng(32.874188,-117.204090),
    new google.maps.LatLng(32.874177,-117.204031),new google.maps.LatLng(32.874173,-117.204008),new google.maps.LatLng(32.874154,-117.203996),
    new google.maps.LatLng(32.874128,-117.203983),new google.maps.LatLng(32.874114,-117.203977),new google.maps.LatLng(32.874145,-117.203850),
    new google.maps.LatLng(32.874175,-117.203756),new google.maps.LatLng(32.874155,-117.203667),new google.maps.LatLng(32.874211,-117.203403),
    new google.maps.LatLng(32.874263,-117.203190),new google.maps.LatLng(32.874333,-117.202900),new google.maps.LatLng(32.874297,-117.202802),
    new google.maps.LatLng(32.873995,-117.202676),new google.maps.LatLng(32.873767,-117.202590),new google.maps.LatLng(32.873501,-117.202487),
    new google.maps.LatLng(32.873289,-117.202399),new google.maps.LatLng(32.873004,-117.202278),new google.maps.LatLng(32.872750,-117.202180),
    new google.maps.LatLng(32.872202,-117.201963),new google.maps.LatLng(32.871999,-117.201884),new google.maps.LatLng(32.871724,-117.201776),
    new google.maps.LatLng(32.871408,-117.201644),new google.maps.LatLng(32.871368,-117.201637),new google.maps.LatLng(32.871302,-117.201611),
    new google.maps.LatLng(32.871286,-117.201664),new google.maps.LatLng(32.871261,-117.201676),new google.maps.LatLng(32.871241,-117.201691),
    new google.maps.LatLng(32.871214,-117.201715),new google.maps.LatLng(32.871203,-117.201739),new google.maps.LatLng(32.871203,-117.201787),
    new google.maps.LatLng(32.871222,-117.201834),new google.maps.LatLng(32.871264,-117.201935),new google.maps.LatLng(32.871337,-117.202102),
    new google.maps.LatLng(32.871356,-117.203048),new google.maps.LatLng(32.871355,-117.203426),new google.maps.LatLng(32.871355,-117.203792),
    new google.maps.LatLng(32.871358,-117.204114),new google.maps.LatLng(32.871351,-117.204414),new google.maps.LatLng(32.871295,-117.204982),
    new google.maps.LatLng(32.871296,-117.205013),new google.maps.LatLng(32.871274,-117.205089),new google.maps.LatLng(32.871260,-117.205143),
    new google.maps.LatLng(32.871248,-117.205228),new google.maps.LatLng(32.871214,-117.205290),new google.maps.LatLng(32.871179,-117.205337),
    new google.maps.LatLng(32.871158,-117.205377),new google.maps.LatLng(32.871160,-117.205444),new google.maps.LatLng(32.871166,-117.205502),
    new google.maps.LatLng(32.871222,-117.205536),new google.maps.LatLng(32.871319,-117.205553),new google.maps.LatLng(32.871426,-117.205554),
    new google.maps.LatLng(32.871493,-117.205548),new google.maps.LatLng(32.871556,-117.205565),new google.maps.LatLng(32.871607,-117.205587),
    new google.maps.LatLng(32.871663,-117.205573),new google.maps.LatLng(32.871730,-117.205561),new google.maps.LatLng(32.871785,-117.205549),
    new google.maps.LatLng(32.871867,-117.205525),new google.maps.LatLng(32.871962,-117.205485),new google.maps.LatLng(32.872161,-117.205400),
    new google.maps.LatLng(32.872276,-117.205392),new google.maps.LatLng(32.872519,-117.205389),new google.maps.LatLng(32.872788,-117.205389),
    new google.maps.LatLng(32.873080,-117.205388),new google.maps.LatLng(32.873194,-117.205391),new google.maps.LatLng(32.873231,-117.205277),
    new google.maps.LatLng(32.873264,-117.205180),new google.maps.LatLng(32.873350,-117.204912),new google.maps.LatLng(32.873489,-117.204987),
    new google.maps.LatLng(32.873633,-117.205054),new google.maps.LatLng(32.873796,-117.205122)
	];path[xx++]=laJollaCrossroadsPath;
	
	//Mapping coordinates for La Jolla Del Sol	
	var laJollaDelSolPath = [			
	new google.maps.LatLng(32.866009,-117.224619),new google.maps.LatLng(32.866022,-117.222682),new google.maps.LatLng(32.865984,-117.220555),
    new google.maps.LatLng(32.865619,-117.220976),new google.maps.LatLng(32.865030,-117.221576),new google.maps.LatLng(32.864698,-117.221869),
    new google.maps.LatLng(32.864353,-117.222125),new google.maps.LatLng(32.864729,-117.223170),new google.maps.LatLng(32.864792,-117.224972),
    new google.maps.LatLng(32.864715,-117.225137),new google.maps.LatLng(32.864810,-117.225216),new google.maps.LatLng(32.864855,-117.225223),
    new google.maps.LatLng(32.864897,-117.225200),new google.maps.LatLng(32.865033,-117.225069),new google.maps.LatLng(32.865172,-117.224951),
    new google.maps.LatLng(32.865395,-117.224819),new google.maps.LatLng(32.865610,-117.224721),new google.maps.LatLng(32.865814,-117.224658)
	];path[xx++]=laJollaDelSolPath;	

	//Mapping coordinates for La Jolla Garden Villas
	var  laJollaGardenVillasPath = [		
	new google.maps.LatLng(32.869430,-117.224622),new google.maps.LatLng(32.869430,-117.224154),new google.maps.LatLng(32.868580,-117.224154),
    new google.maps.LatLng(32.868568,-117.224582),new google.maps.LatLng(32.868570,-117.224614),new google.maps.LatLng(32.868585,-117.224650),
    new google.maps.LatLng(32.868620,-117.224678),new google.maps.LatLng(32.868678,-117.224687),new google.maps.LatLng(32.868740,-117.224692),
    new google.maps.LatLng(32.868842,-117.224693),new google.maps.LatLng(32.868993,-117.224697),new google.maps.LatLng(32.869057,-117.224695),
    new google.maps.LatLng(32.869113,-117.224689),new google.maps.LatLng(32.869183,-117.224680),new google.maps.LatLng(32.869271,-117.224657),
    new google.maps.LatLng(32.869346,-117.224632)
	];path[xx++]=laJollaGardenVillasPath;	

	//Mapping coordinates for La Jolla Internatiol Garden
	var laJollaInternationalGardenPath = [
	new google.maps.LatLng(32.867495,-117.224666),new google.maps.LatLng(32.867483,-117.222688),new google.maps.LatLng(32.866026,-117.222682),
    new google.maps.LatLng(32.866012,-117.224621)
	];path[xx++]=laJollaInternationalGardenPath;
	
	//Mapping coordinates for La Jolla Palms
	var laJollaPalmsPath = [
	new google.maps.LatLng(32.870669,-117.223510),new google.maps.LatLng(32.870671,-117.223447),new google.maps.LatLng(32.870631,-117.223349),
    new google.maps.LatLng(32.870373,-117.222737),new google.maps.LatLng(32.870368,-117.222724),new google.maps.LatLng(32.869430,-117.222692),
    new google.maps.LatLng(32.869430,-117.224622),new google.maps.LatLng(32.869572,-117.224542),new google.maps.LatLng(32.869682,-117.224467),
    new google.maps.LatLng(32.869831,-117.224330),new google.maps.LatLng(32.870175,-117.223948),new google.maps.LatLng(32.870361,-117.223762),
    new google.maps.LatLng(32.870486,-117.223655),new google.maps.LatLng(32.870645,-117.223548)
	];path[xx++]=laJollaPalmsPath;
	
	//Mapping coordinates for La Jolla Terrace
	var laJollaTerracePath = [
	new google.maps.LatLng(32.869117,-117.237919),new google.maps.LatLng(32.869154,-117.237890),new google.maps.LatLng(32.869174,-117.237781),
    new google.maps.LatLng(32.869200,-117.237647),new google.maps.LatLng(32.869217,-117.237552),new google.maps.LatLng(32.869247,-117.237461),
    new google.maps.LatLng(32.869296,-117.237375),new google.maps.LatLng(32.869331,-117.237320),new google.maps.LatLng(32.869385,-117.237263),
    new google.maps.LatLng(32.869411,-117.237227),new google.maps.LatLng(32.869404,-117.237167),new google.maps.LatLng(32.869392,-117.237111),
    new google.maps.LatLng(32.869389,-117.237018),new google.maps.LatLng(32.869388,-117.236951),new google.maps.LatLng(32.869408,-117.236892),
    new google.maps.LatLng(32.869453,-117.236860),new google.maps.LatLng(32.869478,-117.236806),new google.maps.LatLng(32.869478,-117.236707),
    new google.maps.LatLng(32.869481,-117.236608),new google.maps.LatLng(32.869481,-117.236500),new google.maps.LatLng(32.869481,-117.236369),
    new google.maps.LatLng(32.869363,-117.236315),new google.maps.LatLng(32.869215,-117.236296),new google.maps.LatLng(32.869012,-117.236294),			
    new google.maps.LatLng(32.868692,-117.236237),new google.maps.LatLng(32.868372,-117.236162),new google.maps.LatLng(32.868151,-117.236071),
    new google.maps.LatLng(32.867935,-117.236007),new google.maps.LatLng(32.867739,-117.235977),new google.maps.LatLng(32.867421,-117.235964),
    new google.maps.LatLng(32.867113,-117.235961),new google.maps.LatLng(32.867032,-117.235964),new google.maps.LatLng(32.867025,-117.236186),
    new google.maps.LatLng(32.867023,-117.236275),new google.maps.LatLng(32.867020,-117.236361),new google.maps.LatLng(32.867020,-117.236417),
    new google.maps.LatLng(32.866973,-117.236457),new google.maps.LatLng(32.866919,-117.236508),new google.maps.LatLng(32.866838,-117.236744),
    new google.maps.LatLng(32.866811,-117.236844),new google.maps.LatLng(32.866788,-117.236935),new google.maps.LatLng(32.866779,-117.236991),
    new google.maps.LatLng(32.866782,-117.237031),new google.maps.LatLng(32.866791,-117.237061),new google.maps.LatLng(32.866813,-117.237093),
    new google.maps.LatLng(32.866813,-117.237133),new google.maps.LatLng(32.866812,-117.237151),new google.maps.LatLng(32.867219,-117.237334),
    new google.maps.LatLng(32.867802,-117.237584),new google.maps.LatLng(32.868084,-117.237699),new google.maps.LatLng(32.868354,-117.237785),
    new google.maps.LatLng(32.868753,-117.237884),new google.maps.LatLng(32.868947,-117.237917),new google.maps.LatLng(32.869066,-117.237933)
	];path[xx++]=laJollaTerracePath;

	//Mapping coordinates for La Jolla Village Park
	var laJollaVillageParkPath = [
	new google.maps.LatLng(32.870190,-117.220922),new google.maps.LatLng(32.870205,-117.220824),new google.maps.LatLng(32.870238,-117.220674),
    new google.maps.LatLng(32.870273,-117.220521),new google.maps.LatLng(32.870337,-117.220281),new google.maps.LatLng(32.870413,-117.220063),
    new google.maps.LatLng(32.870484,-117.219887),new google.maps.LatLng(32.870534,-117.219764),new google.maps.LatLng(32.870649,-117.219545),
    new google.maps.LatLng(32.870831,-117.219171),new google.maps.LatLng(32.871131,-117.218589),new google.maps.LatLng(32.871140,-117.218539),
    new google.maps.LatLng(32.871126,-117.218502),new google.maps.LatLng(32.871099,-117.218472),new google.maps.LatLng(32.871060,-117.218467),
    new google.maps.LatLng(32.870502,-117.218472),new google.maps.LatLng(32.870108,-117.218476),new google.maps.LatLng(32.869949,-117.218480),
    new google.maps.LatLng(32.869770,-117.218483),new google.maps.LatLng(32.869722,-117.218487),new google.maps.LatLng(32.869492,-117.218510),
    new google.maps.LatLng(32.869344,-117.218528),new google.maps.LatLng(32.869244,-117.218542),new google.maps.LatLng(32.869073,-117.218579),
    new google.maps.LatLng(32.868842,-117.218637),new google.maps.LatLng(32.868620,-117.218697),new google.maps.LatLng(32.868365,-117.218793),
    new google.maps.LatLng(32.868222,-117.218856),new google.maps.LatLng(32.868030,-117.218939),new google.maps.LatLng(32.867761,-117.219078),
    new google.maps.LatLng(32.867740,-117.219116),new google.maps.LatLng(32.867737,-117.219175),new google.maps.LatLng(32.867772,-117.219282),
    new google.maps.LatLng(32.867839,-117.219447),new google.maps.LatLng(32.867894,-117.219554),new google.maps.LatLng(32.867933,-117.219719),
    new google.maps.LatLng(32.868090,-117.220126),new google.maps.LatLng(32.868118,-117.220162),new google.maps.LatLng(32.868157,-117.220281),
    new google.maps.LatLng(32.868176,-117.220371),new google.maps.LatLng(32.868186,-117.220415),new google.maps.LatLng(32.868227,-117.220551),
    new google.maps.LatLng(32.868307,-117.220824),new google.maps.LatLng(32.868340,-117.220928),new google.maps.LatLng(32.868371,-117.220963),
    new google.maps.LatLng(32.868420,-117.220973),new google.maps.LatLng(32.868457,-117.221060),new google.maps.LatLng(32.868723,-117.220978),
    new google.maps.LatLng(32.869408,-117.220972),new google.maps.LatLng(32.870152,-117.220924)
	];path[xx++]=laJollaVillageParkPath;

	//Mapping coordinates for La Jolla Village Tennis Club
	var laJollaVillageTennisClubPath=[
	new google.maps.LatLng(32.871436,-117.224306),new google.maps.LatLng(32.871436,-117.218755),new google.maps.LatLng(32.870867,-117.219891),
    new google.maps.LatLng(32.870727,-117.220196),new google.maps.LatLng(32.870624,-117.220516),new google.maps.LatLng(32.870587,-117.220646),
    new google.maps.LatLng(32.870554,-117.220795),new google.maps.LatLng(32.870530,-117.220921),new google.maps.LatLng(32.870515,-117.220994),
    new google.maps.LatLng(32.870507,-117.221060),new google.maps.LatLng(32.870490,-117.221257),new google.maps.LatLng(32.870483,-117.221440),
    new google.maps.LatLng(32.870483,-117.221554),new google.maps.LatLng(32.870491,-117.221743),new google.maps.LatLng(32.870507,-117.221893),
    new google.maps.LatLng(32.870534,-117.222075),new google.maps.LatLng(32.870562,-117.222252),new google.maps.LatLng(32.870626,-117.222506),
    new google.maps.LatLng(32.870727,-117.222778),new google.maps.LatLng(32.870830,-117.223011),new google.maps.LatLng(32.870920,-117.223199),
    new google.maps.LatLng(32.871070,-117.223528),new google.maps.LatLng(32.871140,-117.223682)
	];path[xx++]=laJollaVillageTennisClubPath;

	//Mapping coordinates for La Mirada 
	var laMiradaPath = [	
	new google.maps.LatLng(32.867121,-117.227849),new google.maps.LatLng(32.867130,-117.227436),new google.maps.LatLng(32.867139,-117.227004),
    new google.maps.LatLng(32.867204,-117.224898),new google.maps.LatLng(32.866308,-117.224869),new google.maps.LatLng(32.866080,-117.224877),
    new google.maps.LatLng(32.865886,-117.224908),new google.maps.LatLng(32.865727,-117.224949),new google.maps.LatLng(32.865570,-117.225011),
    new google.maps.LatLng(32.865375,-117.225113),new google.maps.LatLng(32.865201,-117.225232),new google.maps.LatLng(32.865078,-117.225341),
    new google.maps.LatLng(32.865051,-117.225372),new google.maps.LatLng(32.865037,-117.225413),new google.maps.LatLng(32.865048,-117.225476),
    new google.maps.LatLng(32.865087,-117.225534),new google.maps.LatLng(32.865160,-117.225628),new google.maps.LatLng(32.865265,-117.225798),
    new google.maps.LatLng(32.865376,-117.226020),new google.maps.LatLng(32.865481,-117.226281),new google.maps.LatLng(32.865550,-117.226529),
    new google.maps.LatLng(32.865585,-117.226691),new google.maps.LatLng(32.865616,-117.226899),new google.maps.LatLng(32.865630,-117.227107),
    new google.maps.LatLng(32.865633,-117.227245),new google.maps.LatLng(32.865620,-117.227459),new google.maps.LatLng(32.865604,-117.227776),
    new google.maps.LatLng(32.865576,-117.228022)
	];path[xx++]=laMiradaPath;
	
	//Mapping coordinates for La Regencia
	var laRegenciaPath = [
	new google.maps.LatLng(32.864713,-117.225134),new google.maps.LatLng(32.864789,-117.224968),new google.maps.LatLng(32.864726,-117.223174),
    new google.maps.LatLng(32.864353,-117.222128),new google.maps.LatLng(32.863973,-117.222362),new google.maps.LatLng(32.863782,-117.222468),
    new google.maps.LatLng(32.863518,-117.222593),new google.maps.LatLng(32.863257,-117.222696),new google.maps.LatLng(32.862934,-117.222805),
    new google.maps.LatLng(32.862829,-117.222832),new google.maps.LatLng(32.862985,-117.223571),new google.maps.LatLng(32.863212,-117.224701),
    new google.maps.LatLng(32.863437,-117.224676),new google.maps.LatLng(32.863621,-117.224681),new google.maps.LatLng(32.863838,-117.224711),
    new google.maps.LatLng(32.863998,-117.224751),new google.maps.LatLng(32.864160,-117.224806),new google.maps.LatLng(32.864321,-117.224878),
    new google.maps.LatLng(32.864427,-117.224932),new google.maps.LatLng(32.864553,-117.225018),new google.maps.LatLng(32.864645,-117.225079)
	];path[xx++]=laRegenciaPath;
	
	//Mapping coordinates for La Scala
	var laScalaPath = [
	new google.maps.LatLng(32.868258,-117.224648),new google.maps.LatLng(32.868287,-117.224601),new google.maps.LatLng(32.868321,-117.222667),
    new google.maps.LatLng(32.867487,-117.222690),new google.maps.LatLng(32.867497,-117.224665),new google.maps.LatLng(32.868225,-117.224666)
	];path[xx++]=laScalaPath;
	
	//Mapping coordinates for Las Flores	
	var lasFloresPath = [
	new google.maps.LatLng(32.861634,-117.228986),new google.maps.LatLng(32.861614,-117.228881),new google.maps.LatLng(32.861598,-117.228822),
    new google.maps.LatLng(32.861565,-117.228742),new google.maps.LatLng(32.861544,-117.228683),new google.maps.LatLng(32.861529,-117.228618),
    new google.maps.LatLng(32.861521,-117.228547),new google.maps.LatLng(32.861526,-117.228480),new google.maps.LatLng(32.861555,-117.228372),
    new google.maps.LatLng(32.861582,-117.228262),new google.maps.LatLng(32.861607,-117.228146),new google.maps.LatLng(32.861627,-117.228039),
    new google.maps.LatLng(32.861654,-117.227900),new google.maps.LatLng(32.861662,-117.227792),new google.maps.LatLng(32.861655,-117.227713),
    new google.maps.LatLng(32.861634,-117.227647),new google.maps.LatLng(32.861605,-117.227606),new google.maps.LatLng(32.861563,-117.227554),
    new google.maps.LatLng(32.861522,-117.227513),new google.maps.LatLng(32.861476,-117.227478),new google.maps.LatLng(32.861425,-117.227433),
    new google.maps.LatLng(32.861400,-117.227386),new google.maps.LatLng(32.861345,-117.227389),new google.maps.LatLng(32.861308,-117.227394),
    new google.maps.LatLng(32.861264,-117.227409),new google.maps.LatLng(32.861213,-117.227435),new google.maps.LatLng(32.861156,-117.227466),
    new google.maps.LatLng(32.861085,-117.227504),new google.maps.LatLng(32.861026,-117.227525),new google.maps.LatLng(32.860960,-117.227541),
    new google.maps.LatLng(32.860821,-117.227560),new google.maps.LatLng(32.860728,-117.227555),new google.maps.LatLng(32.860617,-117.227537),
    new google.maps.LatLng(32.860537,-117.227533),new google.maps.LatLng(32.860462,-117.227563),new google.maps.LatLng(32.860399,-117.227594),
    new google.maps.LatLng(32.860306,-117.227629),new google.maps.LatLng(32.860187,-117.227634),new google.maps.LatLng(32.860107,-117.227633),
    new google.maps.LatLng(32.859934,-117.227645),new google.maps.LatLng(32.859778,-117.227665),new google.maps.LatLng(32.859613,-117.227662),
    new google.maps.LatLng(32.859493,-117.227639),new google.maps.LatLng(32.859355,-117.227606),new google.maps.LatLng(32.859394,-117.227911),
    new google.maps.LatLng(32.859448,-117.228731),new google.maps.LatLng(32.859504,-117.229442),new google.maps.LatLng(32.859555,-117.229447),
    new google.maps.LatLng(32.859654,-117.229451),new google.maps.LatLng(32.859737,-117.229455),new google.maps.LatLng(32.859926,-117.229452),
    new google.maps.LatLng(32.860175,-117.229419),new google.maps.LatLng(32.860334,-117.229393),new google.maps.LatLng(32.860621,-117.229343),
    new google.maps.LatLng(32.861011,-117.229219),new google.maps.LatLng(32.861383,-117.229073)
	];path[xx++]=lasFloresPath;

	//Mapping coordinates for Las Palmas
	var lasPalmasPath = [
	new google.maps.LatLng(32.861581,-117.225212),new google.maps.LatLng(32.861597,-117.225161),new google.maps.LatLng(32.861589,-117.225079),
    new google.maps.LatLng(32.861572,-117.225007),new google.maps.LatLng(32.861530,-117.224823),new google.maps.LatLng(32.861512,-117.224762),
    new google.maps.LatLng(32.861494,-117.224699),new google.maps.LatLng(32.861479,-117.224619),new google.maps.LatLng(32.861449,-117.224480),
    new google.maps.LatLng(32.861454,-117.224451),new google.maps.LatLng(32.861437,-117.224379),new google.maps.LatLng(32.861376,-117.224084),
    new google.maps.LatLng(32.861331,-117.223868),new google.maps.LatLng(32.861284,-117.223663),new google.maps.LatLng(32.861256,-117.223499),
    new google.maps.LatLng(32.861230,-117.223329),new google.maps.LatLng(32.861214,-117.223185),new google.maps.LatLng(32.861200,-117.223059),
    new google.maps.LatLng(32.861192,-117.223019),new google.maps.LatLng(32.861172,-117.222983),new google.maps.LatLng(32.861148,-117.222955),
    new google.maps.LatLng(32.861118,-117.222945),new google.maps.LatLng(32.861021,-117.222929),new google.maps.LatLng(32.860964,-117.222918),
    new google.maps.LatLng(32.860875,-117.222906),new google.maps.LatLng(32.860803,-117.222894),new google.maps.LatLng(32.860665,-117.222866),
    new google.maps.LatLng(32.860618,-117.222851),new google.maps.LatLng(32.860557,-117.222837),new google.maps.LatLng(32.860477,-117.222817),
    new google.maps.LatLng(32.860351,-117.222787),new google.maps.LatLng(32.860131,-117.222719),new google.maps.LatLng(32.860037,-117.222681),
    new google.maps.LatLng(32.859924,-117.222634),new google.maps.LatLng(32.859806,-117.222582),new google.maps.LatLng(32.859632,-117.222508),
    new google.maps.LatLng(32.859423,-117.222397),new google.maps.LatLng(32.859363,-117.222586),new google.maps.LatLng(32.859327,-117.222669),
    new google.maps.LatLng(32.859278,-117.222768),new google.maps.LatLng(32.859226,-117.222925),new google.maps.LatLng(32.859197,-117.222986),
    new google.maps.LatLng(32.859146,-117.223077),new google.maps.LatLng(32.859113,-117.223142),new google.maps.LatLng(32.859079,-117.223264),
    new google.maps.LatLng(32.859073,-117.223294),new google.maps.LatLng(32.859046,-117.223330),new google.maps.LatLng(32.859018,-117.223349),
    new google.maps.LatLng(32.858995,-117.223372),new google.maps.LatLng(32.858964,-117.223419),new google.maps.LatLng(32.858921,-117.223494),
    new google.maps.LatLng(32.858868,-117.223594),new google.maps.LatLng(32.858824,-117.223691),new google.maps.LatLng(32.858790,-117.223746),
    new google.maps.LatLng(32.858753,-117.223796),new google.maps.LatLng(32.858725,-117.223848),new google.maps.LatLng(32.858668,-117.223971),
    new google.maps.LatLng(32.858614,-117.224068),new google.maps.LatLng(32.858571,-117.224158),new google.maps.LatLng(32.858533,-117.224221),
    new google.maps.LatLng(32.858524,-117.224260),new google.maps.LatLng(32.858530,-117.224305),new google.maps.LatLng(32.858526,-117.224355),
    new google.maps.LatLng(32.858525,-117.224399),new google.maps.LatLng(32.858527,-117.224441),new google.maps.LatLng(32.858539,-117.224482),
    new google.maps.LatLng(32.858565,-117.224513),new google.maps.LatLng(32.858600,-117.224663),new google.maps.LatLng(32.858627,-117.224733),
    new google.maps.LatLng(32.858749,-117.224695),new google.maps.LatLng(32.858870,-117.224670),new google.maps.LatLng(32.858989,-117.224647),
    new google.maps.LatLng(32.859108,-117.224642),new google.maps.LatLng(32.859258,-117.224663),new google.maps.LatLng(32.859419,-117.224706),
    new google.maps.LatLng(32.859529,-117.224738),new google.maps.LatLng(32.859646,-117.224791),new google.maps.LatLng(32.859829,-117.224872),
    new google.maps.LatLng(32.860044,-117.224970),new google.maps.LatLng(32.860194,-117.225044),new google.maps.LatLng(32.860381,-117.225131),
    new google.maps.LatLng(32.860510,-117.225174),new google.maps.LatLng(32.860773,-117.225237),new google.maps.LatLng(32.860942,-117.225260),
    new google.maps.LatLng(32.861126,-117.225272),new google.maps.LatLng(32.861314,-117.225269),new google.maps.LatLng(32.861490,-117.225249),
    new google.maps.LatLng(32.861563,-117.225235)
	];path[xx++]=lasPalmasPath;

	//Mapping coordinates for Madrid
	var madridPath = [
	new google.maps.LatLng(32.861400,-117.227386),new google.maps.LatLng(32.861395,-117.227327),new google.maps.LatLng(32.861431,-117.227236),
    new google.maps.LatLng(32.861483,-117.227107),new google.maps.LatLng(32.861522,-117.226969),new google.maps.LatLng(32.861569,-117.226573),
    new google.maps.LatLng(32.861571,-117.226256),new google.maps.LatLng(32.861650,-117.225889),new google.maps.LatLng(32.861539,-117.225521),
    new google.maps.LatLng(32.861332,-117.225522),new google.maps.LatLng(32.861100,-117.225523),new google.maps.LatLng(32.860746,-117.225487),
    new google.maps.LatLng(32.860461,-117.225417),new google.maps.LatLng(32.860292,-117.225361),new google.maps.LatLng(32.860069,-117.225261),
    new google.maps.LatLng(32.859766,-117.225121),new google.maps.LatLng(32.859682,-117.225438),new google.maps.LatLng(32.859484,-117.226111),
    new google.maps.LatLng(32.859405,-117.226371),new google.maps.LatLng(32.859288,-117.226779),new google.maps.LatLng(32.859248,-117.227098),
    new google.maps.LatLng(32.859279,-117.227350),new google.maps.LatLng(32.859347,-117.227573),new google.maps.LatLng(32.859355,-117.227606),
    new google.maps.LatLng(32.859493,-117.227639),new google.maps.LatLng(32.859613,-117.227662),new google.maps.LatLng(32.859778,-117.227665),
    new google.maps.LatLng(32.859934,-117.227645),new google.maps.LatLng(32.860107,-117.227633),new google.maps.LatLng(32.860187,-117.227634),
    new google.maps.LatLng(32.860306,-117.227629),new google.maps.LatLng(32.860399,-117.227594),new google.maps.LatLng(32.860462,-117.227563),
    new google.maps.LatLng(32.860537,-117.227533),new google.maps.LatLng(32.860617,-117.227537),new google.maps.LatLng(32.860728,-117.227555),
    new google.maps.LatLng(32.860821,-117.227560),new google.maps.LatLng(32.860960,-117.227541),new google.maps.LatLng(32.861026,-117.227525),
    new google.maps.LatLng(32.861085,-117.227504),new google.maps.LatLng(32.861156,-117.227466),new google.maps.LatLng(32.861213,-117.227435),
    new google.maps.LatLng(32.861264,-117.227409),new google.maps.LatLng(32.861308,-117.227394),new google.maps.LatLng(32.861345,-117.227389),
    new google.maps.LatLng(32.861400,-117.227386)
	];path[xx++]=madridPath;

	//Mapping coordinates for Marbella
	var marbellaPath = [
	new google.maps.LatLng(32.863545,-117.227051),new google.maps.LatLng(32.863830,-117.224916),new google.maps.LatLng(32.863728,-117.224896),
    new google.maps.LatLng(32.863568,-117.224880),new google.maps.LatLng(32.863397,-117.224885),new google.maps.LatLng(32.863189,-117.224904),
    new google.maps.LatLng(32.863017,-117.224947),new google.maps.LatLng(32.862923,-117.224978),new google.maps.LatLng(32.862806,-117.225020),
    new google.maps.LatLng(32.862241,-117.225258),new google.maps.LatLng(32.862043,-117.225336),new google.maps.LatLng(32.861940,-117.225375),
    new google.maps.LatLng(32.861880,-117.225393),new google.maps.LatLng(32.861792,-117.225413),new google.maps.LatLng(32.861884,-117.225769),
    new google.maps.LatLng(32.861897,-117.225845),new google.maps.LatLng(32.861896,-117.225883),new google.maps.LatLng(32.861883,-117.225930),
    new google.maps.LatLng(32.861801,-117.226185),new google.maps.LatLng(32.861779,-117.226359),new google.maps.LatLng(32.861792,-117.226502),
    new google.maps.LatLng(32.861825,-117.226567),new google.maps.LatLng(32.861869,-117.226661),new google.maps.LatLng(32.861947,-117.227032),
    new google.maps.LatLng(32.862000,-117.227127),new google.maps.LatLng(32.862039,-117.227165),new google.maps.LatLng(32.862098,-117.227180),			
    new google.maps.LatLng(32.862351,-117.227115),new google.maps.LatLng(32.862386,-117.227062),new google.maps.LatLng(32.862732,-117.227029),
    new google.maps.LatLng(32.862889,-117.227039),new google.maps.LatLng(32.863233,-117.227035),new google.maps.LatLng(32.863425,-117.227071)
	];path[xx++]=marbellaPath;

	//Mapping coordinates for Nobel Court
	var nobelCourtPath = [
	new google.maps.LatLng(32.868238,-117.227240),new google.maps.LatLng(32.868283,-117.225070),new google.maps.LatLng(32.868271,-117.225010),
    new google.maps.LatLng(32.868234,-117.224983),new google.maps.LatLng(32.868040,-117.224965),new google.maps.LatLng(32.867709,-117.224925),
    new google.maps.LatLng(32.867487,-117.224902),new google.maps.LatLng(32.867206,-117.224896),new google.maps.LatLng(32.867133,-117.227453),
    new google.maps.LatLng(32.867530,-117.227476),new google.maps.LatLng(32.867539,-117.227208)
	];path[xx++]=nobelCourtPath;

	//Mapping coordinates for Pacific Gardens
	var pacificGardensPath = [
	new google.maps.LatLng(32.866312,-117.215231),new google.maps.LatLng(32.866331,-117.215115),new google.maps.LatLng(32.866358,-117.214969),
    new google.maps.LatLng(32.866393,-117.214800),new google.maps.LatLng(32.866610,-117.213910),new google.maps.LatLng(32.866641,-117.213761),
    new google.maps.LatLng(32.866639,-117.213719),new google.maps.LatLng(32.866615,-117.213682),new google.maps.LatLng(32.866586,-117.213666),
    new google.maps.LatLng(32.866262,-117.213549),new google.maps.LatLng(32.866093,-117.213483),new google.maps.LatLng(32.865696,-117.213322),
    new google.maps.LatLng(32.865509,-117.213253),new google.maps.LatLng(32.865182,-117.213145),new google.maps.LatLng(32.864992,-117.213072),
    new google.maps.LatLng(32.864826,-117.213014),new google.maps.LatLng(32.864444,-117.212879),new google.maps.LatLng(32.864362,-117.212866),
    new google.maps.LatLng(32.864334,-117.212876),new google.maps.LatLng(32.864316,-117.212899),new google.maps.LatLng(32.864296,-117.212974),
    new google.maps.LatLng(32.864276,-117.213068),new google.maps.LatLng(32.864256,-117.213208),new google.maps.LatLng(32.864248,-117.213326),
    new google.maps.LatLng(32.864246,-117.213520),new google.maps.LatLng(32.864246,-117.213627),new google.maps.LatLng(32.864602,-117.214012),
    new google.maps.LatLng(32.865191,-117.214588),new google.maps.LatLng(32.865714,-117.215124)
	];path[xx++]=pacificGardensPath;

	//Mapping coordinates for Pines of La Jolla
	var pinesofLaJollaPath = [
	new google.maps.LatLng(32.866980,-117.222683),new google.maps.LatLng(32.866996,-117.222606),new google.maps.LatLng(32.867015,-117.222490),
    new google.maps.LatLng(32.867031,-117.222289),new google.maps.LatLng(32.867041,-117.221995),new google.maps.LatLng(32.867024,-117.221641),
    new google.maps.LatLng(32.866955,-117.221236),new google.maps.LatLng(32.866780,-117.220620),new google.maps.LatLng(32.866530,-117.220000),
    new google.maps.LatLng(32.865984,-117.220555),new google.maps.LatLng(32.866022,-117.222682)						
	];path[xx++]=pinesofLaJollaPath;				

	//Mapping coordinates for Playmore Terrace
	var playmorTerracePath = [
	new google.maps.LatLng(32.863525,-117.219325),new google.maps.LatLng(32.863525,-117.216543),new google.maps.LatLng(32.863163,-117.216539),
    new google.maps.LatLng(32.862918,-117.216538),new google.maps.LatLng(32.862789,-117.216542),new google.maps.LatLng(32.862708,-117.216550),
    new google.maps.LatLng(32.862609,-117.216566),new google.maps.LatLng(32.862465,-117.216596),new google.maps.LatLng(32.862351,-117.216626),
    new google.maps.LatLng(32.862231,-117.216653),new google.maps.LatLng(32.862148,-117.216689),new google.maps.LatLng(32.862019,-117.216746),
    new google.maps.LatLng(32.861895,-117.216793),new google.maps.LatLng(32.861792,-117.216848),new google.maps.LatLng(32.861584,-117.216983),
    new google.maps.LatLng(32.861494,-117.217038),new google.maps.LatLng(32.861362,-117.217144),new google.maps.LatLng(32.861265,-117.217222),
    new google.maps.LatLng(32.861185,-117.217304),new google.maps.LatLng(32.861176,-117.217329),new google.maps.LatLng(32.861176,-117.217361),
    new google.maps.LatLng(32.861188,-117.217395),new google.maps.LatLng(32.861206,-117.217443),new google.maps.LatLng(32.861220,-117.217489),
    new google.maps.LatLng(32.861244,-117.217553),new google.maps.LatLng(32.861272,-117.217625),new google.maps.LatLng(32.861298,-117.217733),
    new google.maps.LatLng(32.861332,-117.217860),new google.maps.LatLng(32.861353,-117.217962),new google.maps.LatLng(32.861371,-117.218076),
    new google.maps.LatLng(32.861399,-117.218238),new google.maps.LatLng(32.861415,-117.218367),new google.maps.LatLng(32.861416,-117.218453),
    new google.maps.LatLng(32.861424,-117.218705),new google.maps.LatLng(32.861422,-117.218782),new google.maps.LatLng(32.861418,-117.219111),
    new google.maps.LatLng(32.861420,-117.219216),new google.maps.LatLng(32.861420,-117.219307),new google.maps.LatLng(32.861458,-117.219325)
	];path[xx++]=playmorTerracePath;

	//Mapping coordinates for Regents Court
	var regentsCourtPath = [			
	new google.maps.LatLng(32.867293,-117.218961),new google.maps.LatLng(32.867307,-117.218913),new google.maps.LatLng(32.867081,-117.218398),
    new google.maps.LatLng(32.867060,-117.218347),new google.maps.LatLng(32.865976,-117.218350),new google.maps.LatLng(32.865994,-117.219931),
    new google.maps.LatLng(32.866080,-117.220041),new google.maps.LatLng(32.866513,-117.219600),new google.maps.LatLng(32.866632,-117.219500),
    new google.maps.LatLng(32.866733,-117.219411),new google.maps.LatLng(32.866833,-117.219325),new google.maps.LatLng(32.867000,-117.219193),
    new google.maps.LatLng(32.867149,-117.219087),new google.maps.LatLng(32.867267,-117.219003)
	];path[xx++]=regentsCourtPath;

	//Mapping coordinates for Regents La Jolla
	var regentsLaJollaPath = [
	new google.maps.LatLng(32.875021,-117.218139),new google.maps.LatLng(32.875052,-117.21808),new google.maps.LatLng(32.875040,-117.216191),
    new google.maps.LatLng(32.875021,-117.216133),new google.maps.LatLng(32.874957,-117.216085),new google.maps.LatLng(32.874737,-117.216089),
    new google.maps.LatLng(32.874636,-117.216070),new google.maps.LatLng(32.873951,-117.216075),new google.maps.LatLng(32.873791,-117.216091),
    new google.maps.LatLng(32.873685,-117.216118),new google.maps.LatLng(32.873585,-117.216160),new google.maps.LatLng(32.873476,-117.216220),
    new google.maps.LatLng(32.873389,-117.216273),new google.maps.LatLng(32.873279,-117.216375),new google.maps.LatLng(32.873178,-117.216495),
    new google.maps.LatLng(32.873163,-117.216533),new google.maps.LatLng(32.873187,-117.216586),new google.maps.LatLng(32.873359,-117.216785),
    new google.maps.LatLng(32.873376,-117.216848),new google.maps.LatLng(32.873374,-117.217107),new google.maps.LatLng(32.873371,-117.217414),
    new google.maps.LatLng(32.873601,-117.217725),new google.maps.LatLng(32.873609,-117.218184),new google.maps.LatLng(32.874974,-117.218165)
	];path[xx++]=regentsLaJollaPath;

	//Mapping coordinates for The Terraces
	var terracesPath = [
	new google.maps.LatLng(32.869539,-117.233187),new google.maps.LatLng(32.868926,-117.233139),new google.maps.LatLng(32.868931,-117.232162),
    new google.maps.LatLng(32.869309,-117.231760),new google.maps.LatLng(32.869341,-117.230998),new google.maps.LatLng(32.869584,-117.231014)
	];path[xx++]=terracesPath;

	//Mapping coordinates for The Villas
	var villasPath = [	
	new google.maps.LatLng(32.870794,-117.205179),new google.maps.LatLng(32.870840,-117.205178),new google.maps.LatLng(32.870901,-117.205072),
    new google.maps.LatLng(32.870958,-117.204947),new google.maps.LatLng(32.871096,-117.204737),new google.maps.LatLng(32.871241,-117.204558),
    new google.maps.LatLng(32.871346,-117.204440),new google.maps.LatLng(32.871349,-117.204410),new google.maps.LatLng(32.871356,-117.204110),
    new google.maps.LatLng(32.871353,-117.203100),new google.maps.LatLng(32.871349,-117.202831),new google.maps.LatLng(32.870751,-117.201444),
    new google.maps.LatLng(32.870602,-117.201141),new google.maps.LatLng(32.870100,-117.201114),new google.maps.LatLng(32.869676,-117.201127),
    new google.maps.LatLng(32.869535,-117.201125),new google.maps.LatLng(32.869535,-117.201162),new google.maps.LatLng(32.869524,-117.201201),
    new google.maps.LatLng(32.869512,-117.201235),new google.maps.LatLng(32.869500,-117.201260),new google.maps.LatLng(32.869491,-117.201294),
    new google.maps.LatLng(32.869490,-117.201334),new google.maps.LatLng(32.869491,-117.201375),new google.maps.LatLng(32.869488,-117.201413),
    new google.maps.LatLng(32.869491,-117.201516),new google.maps.LatLng(32.869490,-117.201598),new google.maps.LatLng(32.869492,-117.201650),
    new google.maps.LatLng(32.869493,-117.201715),new google.maps.LatLng(32.869490,-117.201767),new google.maps.LatLng(32.869486,-117.201951),
    new google.maps.LatLng(32.869486,-117.201988),new google.maps.LatLng(32.869477,-117.202047),new google.maps.LatLng(32.869470,-117.202113),
    new google.maps.LatLng(32.869460,-117.202195),new google.maps.LatLng(32.869446,-117.202325),new google.maps.LatLng(32.869428,-117.202431),
    new google.maps.LatLng(32.869405,-117.202596),new google.maps.LatLng(32.869380,-117.202721),new google.maps.LatLng(32.869343,-117.202881),
    new google.maps.LatLng(32.869292,-117.203130),new google.maps.LatLng(32.869255,-117.203287),new google.maps.LatLng(32.869220,-117.203395),
    new google.maps.LatLng(32.869166,-117.203551),new google.maps.LatLng(32.869107,-117.203666),new google.maps.LatLng(32.869063,-117.203752),
    new google.maps.LatLng(32.868987,-117.203877),new google.maps.LatLng(32.868984,-117.203895),new google.maps.LatLng(32.868998,-117.203989),
    new google.maps.LatLng(32.869144,-117.204103),new google.maps.LatLng(32.869248,-117.204139),new google.maps.LatLng(32.869344,-117.204185),
    new google.maps.LatLng(32.869406,-117.204229),new google.maps.LatLng(32.869473,-117.204294),new google.maps.LatLng(32.869591,-117.204382),
    new google.maps.LatLng(32.869627,-117.204409),new google.maps.LatLng(32.869674,-117.204422),new google.maps.LatLng(32.869724,-117.204455),
    new google.maps.LatLng(32.869784,-117.204488),new google.maps.LatLng(32.869825,-117.204530),new google.maps.LatLng(32.869863,-117.204575),
    new google.maps.LatLng(32.869874,-117.204586),new google.maps.LatLng(32.870096,-117.204723),new google.maps.LatLng(32.870164,-117.204752),
    new google.maps.LatLng(32.870227,-117.204789),new google.maps.LatLng(32.870286,-117.204810),new google.maps.LatLng(32.870338,-117.204822),
    new google.maps.LatLng(32.870405,-117.204850),new google.maps.LatLng(32.870459,-117.204893),new google.maps.LatLng(32.870498,-117.204917),
    new google.maps.LatLng(32.870545,-117.204971),new google.maps.LatLng(32.870600,-117.205037),new google.maps.LatLng(32.870665,-117.205100),
    new google.maps.LatLng(32.870740,-117.205167),new google.maps.LatLng(32.870774,-117.205181)
	];path[xx++]=villasPath;
	
	//Mapping coordinates for Trieste
	var triestePath = [
	new google.maps.LatLng(32.870368,-117.222720),new google.maps.LatLng(32.870293,-117.222443),new google.maps.LatLng(32.870248,-117.222274),
    new google.maps.LatLng(32.870188,-117.221869),new google.maps.LatLng(32.870169,-117.221390),new google.maps.LatLng(32.870215,-117.220927),
    new google.maps.LatLng(32.870152,-117.220924),new google.maps.LatLng(32.869408,-117.220972),new google.maps.LatLng(32.868723,-117.220978),
    new google.maps.LatLng(32.868457,-117.221060),new google.maps.LatLng(32.868421,-117.221095),new google.maps.LatLng(32.868410,-117.221153),
    new google.maps.LatLng(32.868522,-117.221827),new google.maps.LatLng(32.868538,-117.221961),new google.maps.LatLng(32.868582,-117.222662)
	];path[xx++]=triestePath;	

	//Mapping coordinates for University Woods
	var universityWoodsPath = [
	new google.maps.LatLng(32.861216,-117.222631),new google.maps.LatLng(32.861222,-117.222597),new google.maps.LatLng(32.861226,-117.222523),
    new google.maps.LatLng(32.861225,-117.222399),new google.maps.LatLng(32.861226,-117.222188),new google.maps.LatLng(32.861226,-117.222188),
    new google.maps.LatLng(32.861226,-117.221934),new google.maps.LatLng(32.861227,-117.221855),new google.maps.LatLng(32.861236,-117.221775),
    new google.maps.LatLng(32.861249,-117.221669),new google.maps.LatLng(32.861265,-117.221579),new google.maps.LatLng(32.861266,-117.221479),
    new google.maps.LatLng(32.861272,-117.220660),new google.maps.LatLng(32.861281,-117.219504),new google.maps.LatLng(32.861282,-117.219103),
    new google.maps.LatLng(32.861280,-117.218812),new google.maps.LatLng(32.861287,-117.218546),new google.maps.LatLng(32.861275,-117.218371),
    new google.maps.LatLng(32.861261,-117.218269),new google.maps.LatLng(32.861243,-117.218137),new google.maps.LatLng(32.860975,-117.218123),
    new google.maps.LatLng(32.860655,-117.218070),new google.maps.LatLng(32.860337,-117.217962),new google.maps.LatLng(32.860160,-117.217931),
    new google.maps.LatLng(32.859978,-117.217848),new google.maps.LatLng(32.859714,-117.217897),new google.maps.LatLng(32.859543,-117.218009),
    new google.maps.LatLng(32.859365,-117.218208),new google.maps.LatLng(32.858606,-117.220026),new google.maps.LatLng(32.858272,-117.221021),
    new google.maps.LatLng(32.858259,-117.221083),new google.maps.LatLng(32.858270,-117.221155),new google.maps.LatLng(32.858364,-117.221241),
    new google.maps.LatLng(32.858493,-117.221357),new google.maps.LatLng(32.858670,-117.221508),new google.maps.LatLng(32.858827,-117.221640),
    new google.maps.LatLng(32.859102,-117.221846),new google.maps.LatLng(32.859378,-117.222024),new google.maps.LatLng(32.859685,-117.222192),
    new google.maps.LatLng(32.860008,-117.222342),new google.maps.LatLng(32.860274,-117.222436),new google.maps.LatLng(32.860425,-117.222482),
    new google.maps.LatLng(32.860578,-117.222527),new google.maps.LatLng(32.860828,-117.222582),new google.maps.LatLng(32.861016,-117.222620),
    new google.maps.LatLng(32.861160,-117.222633),new google.maps.LatLng(32.861202,-117.222636)	
	];path[xx++]=universityWoodsPath;

	//Mapping coordinates for Valentia
	var valentiaPath = [	
	new google.maps.LatLng(32.868832,-117.203795),new google.maps.LatLng(32.868867,-117.203785),new google.maps.LatLng(32.868898,-117.203738),
    new google.maps.LatLng(32.868924,-117.203696),new google.maps.LatLng(32.868994,-117.203568),new google.maps.LatLng(32.869021,-117.203520),
    new google.maps.LatLng(32.869045,-117.203455),new google.maps.LatLng(32.869069,-117.203383),new google.maps.LatLng(32.869095,-117.203305),
    new google.maps.LatLng(32.869117,-117.203233),new google.maps.LatLng(32.869138,-117.203126),new google.maps.LatLng(32.869230,-117.202679),
    new google.maps.LatLng(32.869270,-117.202514),new google.maps.LatLng(32.869300,-117.202344),new google.maps.LatLng(32.869325,-117.202125),
    new google.maps.LatLng(32.869341,-117.201924),new google.maps.LatLng(32.869350,-117.201653),new google.maps.LatLng(32.869344,-117.201223),
    new google.maps.LatLng(32.869341,-117.201161),new google.maps.LatLng(32.869327,-117.201135),new google.maps.LatLng(32.869308,-117.201119),
    new google.maps.LatLng(32.869280,-117.201111),new google.maps.LatLng(32.869254,-117.201115),new google.maps.LatLng(32.869193,-117.201117),
    new google.maps.LatLng(32.869125,-117.201114),new google.maps.LatLng(32.869093,-117.201118),new google.maps.LatLng(32.869065,-117.201115),
    new google.maps.LatLng(32.869029,-117.201118),new google.maps.LatLng(32.868987,-117.201122),new google.maps.LatLng(32.868930,-117.201122),
    new google.maps.LatLng(32.868865,-117.201119),new google.maps.LatLng(32.868822,-117.201119),new google.maps.LatLng(32.868699,-117.201121),
    new google.maps.LatLng(32.868368,-117.201123),new google.maps.LatLng(32.868174,-117.201123),new google.maps.LatLng(32.867978,-117.201123),
    new google.maps.LatLng(32.867956,-117.201225),new google.maps.LatLng(32.867933,-117.201343),new google.maps.LatLng(32.867919,-117.201444),
    new google.maps.LatLng(32.867917,-117.201506),new google.maps.LatLng(32.867916,-117.201578),new google.maps.LatLng(32.867923,-117.201669),
    new google.maps.LatLng(32.867923,-117.201742),new google.maps.LatLng(32.867923,-117.201861),new google.maps.LatLng(32.867924,-117.201982),
    new google.maps.LatLng(32.867919,-117.202071),new google.maps.LatLng(32.867908,-117.202179),new google.maps.LatLng(32.867891,-117.202270),
    new google.maps.LatLng(32.867876,-117.202369),new google.maps.LatLng(32.867870,-117.202435),new google.maps.LatLng(32.867864,-117.202518),
    new google.maps.LatLng(32.867866,-117.202609),new google.maps.LatLng(32.867867,-117.202729),new google.maps.LatLng(32.867867,-117.202835),
    new google.maps.LatLng(32.867861,-117.202941),new google.maps.LatLng(32.867852,-117.203048),new google.maps.LatLng(32.867827,-117.203134),
    new google.maps.LatLng(32.867799,-117.203177),new google.maps.LatLng(32.867797,-117.203193),new google.maps.LatLng(32.867811,-117.203209),
    new google.maps.LatLng(32.867865,-117.203199),new google.maps.LatLng(32.867914,-117.203209),new google.maps.LatLng(32.867955,-117.203228),
    new google.maps.LatLng(32.868004,-117.203226),new google.maps.LatLng(32.868058,-117.203228),new google.maps.LatLng(32.868101,-117.203238),
    new google.maps.LatLng(32.868132,-117.203265),new google.maps.LatLng(32.868165,-117.203296),new google.maps.LatLng(32.868202,-117.203327),
    new google.maps.LatLng(32.868280,-117.203375),new google.maps.LatLng(32.868371,-117.203425),new google.maps.LatLng(32.868443,-117.203454),
    new google.maps.LatLng(32.868494,-117.203482),new google.maps.LatLng(32.868551,-117.203536),new google.maps.LatLng(32.868618,-117.203618),
    new google.maps.LatLng(32.868707,-117.203729),new google.maps.LatLng(32.868789,-117.203800)
	];path[xx++]=valentiaPath;

	//Mapping coordinates for Venetian
	var venetianPath = [	
	new google.maps.LatLng(32.868321,-117.222664),new google.maps.LatLng(32.868309,-117.222313),new google.maps.LatLng(32.868276,-117.221955),
    new google.maps.LatLng(32.868223,-117.221566),new google.maps.LatLng(32.868132,-117.221123),new google.maps.LatLng(32.868079,-117.220914),
    new google.maps.LatLng(32.867997,-117.220623),new google.maps.LatLng(32.867910,-117.220351),new google.maps.LatLng(32.867764,-117.219979),
    new google.maps.LatLng(32.867640,-117.219667),new google.maps.LatLng(32.867499,-117.219331),new google.maps.LatLng(32.867477,-117.219295),
    new google.maps.LatLng(32.867448,-117.219276),new google.maps.LatLng(32.867410,-117.219272),new google.maps.LatLng(32.867356,-117.219301),
    new google.maps.LatLng(32.867272,-117.219364),new google.maps.LatLng(32.867161,-117.219443),new google.maps.LatLng(32.867010,-117.219557),
    new google.maps.LatLng(32.866869,-117.219673),new google.maps.LatLng(32.866634,-117.219895),new google.maps.LatLng(32.866530,-117.220000),
    new google.maps.LatLng(32.866780,-117.220620),new google.maps.LatLng(32.866955,-117.221236),new google.maps.LatLng(32.867024,-117.221641),
    new google.maps.LatLng(32.867041,-117.221995),new google.maps.LatLng(32.867031,-117.222289),new google.maps.LatLng(32.867015,-117.222490),
    new google.maps.LatLng(32.866996,-117.222606),new google.maps.LatLng(32.866980,-117.222683),new google.maps.LatLng(32.867486,-117.222688)
	];path[xx++]=venetianPath;

	//Mapping coordinates for Verano
	var veranoPath = [	
	new google.maps.LatLng(32.864671,-117.229150),new google.maps.LatLng(32.864752,-117.229106),new google.maps.LatLng(32.864807,-117.229084),
    new google.maps.LatLng(32.864890,-117.229032),new google.maps.LatLng(32.864943,-117.228989),new google.maps.LatLng(32.865063,-117.228873),
    new google.maps.LatLng(32.865189,-117.228685),new google.maps.LatLng(32.865289,-117.228506),new google.maps.LatLng(32.865368,-117.228359),
    new google.maps.LatLng(32.865396,-117.228281),new google.maps.LatLng(32.865426,-117.228167),new google.maps.LatLng(32.865448,-117.228075),
    new google.maps.LatLng(32.865459,-117.227991),new google.maps.LatLng(32.865474,-117.227859),new google.maps.LatLng(32.865479,-117.227780),
    new google.maps.LatLng(32.865479,-117.227704),new google.maps.LatLng(32.865477,-117.227651),new google.maps.LatLng(32.865475,-117.227527),
    new google.maps.LatLng(32.865461,-117.227396),new google.maps.LatLng(32.865437,-117.227019),new google.maps.LatLng(32.865403,-117.226846),
    new google.maps.LatLng(32.865384,-117.226721),new google.maps.LatLng(32.865367,-117.226621),new google.maps.LatLng(32.865335,-117.226508),
    new google.maps.LatLng(32.865302,-117.226400),new google.maps.LatLng(32.865268,-117.226286),new google.maps.LatLng(32.865228,-117.226188),
    new google.maps.LatLng(32.865181,-117.226067),new google.maps.LatLng(32.865108,-117.225920),new google.maps.LatLng(32.865002,-117.225766),
    new google.maps.LatLng(32.864881,-117.225588),new google.maps.LatLng(32.864704,-117.225409),new google.maps.LatLng(32.864540,-117.225265),
    new google.maps.LatLng(32.864362,-117.225145),new google.maps.LatLng(32.864196,-117.225058),new google.maps.LatLng(32.863899,-117.224961),
    new google.maps.LatLng(32.863828,-117.224940),new google.maps.LatLng(32.863545,-117.227051),new google.maps.LatLng(32.863526,-117.227174),
    new google.maps.LatLng(32.863545,-117.227303),new google.maps.LatLng(32.863509,-117.227679),new google.maps.LatLng(32.863366,-117.229095),
    new google.maps.LatLng(32.863443,-117.229103),new google.maps.LatLng(32.863667,-117.229179),new google.maps.LatLng(32.863876,-117.229244),
    new google.maps.LatLng(32.863964,-117.229262),new google.maps.LatLng(32.864069,-117.229281),new google.maps.LatLng(32.864221,-117.229277),
    new google.maps.LatLng(32.864388,-117.229244),new google.maps.LatLng(32.864503,-117.229213),new google.maps.LatLng(32.864605,-117.229182)
	];path[xx++]=veranoPath;

	//Mapping coordinates for Villa La Jolla
	var villaLaJollaPath = [
	new google.maps.LatLng(32.864064,-117.235997),new google.maps.LatLng(32.864107,-117.235836),new google.maps.LatLng(32.864150,-117.235611),
    new google.maps.LatLng(32.864229,-117.235351),new google.maps.LatLng(32.864360,-117.235000),new google.maps.LatLng(32.864522,-117.234672),
    new google.maps.LatLng(32.864684,-117.234399),new google.maps.LatLng(32.864801,-117.234227),new google.maps.LatLng(32.864815,-117.234184),
    new google.maps.LatLng(32.864801,-117.234123),new google.maps.LatLng(32.864634,-117.233932),new google.maps.LatLng(32.864529,-117.233844),
    new google.maps.LatLng(32.864335,-117.233683),new google.maps.LatLng(32.864173,-117.233575),new google.maps.LatLng(32.864001,-117.233455),
    new google.maps.LatLng(32.863832,-117.233380),new google.maps.LatLng(32.863630,-117.233299),new google.maps.LatLng(32.863481,-117.233248),
    new google.maps.LatLng(32.863296,-117.233205),new google.maps.LatLng(32.863048,-117.233189),new google.maps.LatLng(32.862882,-117.233184),
    new google.maps.LatLng(32.862732,-117.233164),new google.maps.LatLng(32.862630,-117.233177),new google.maps.LatLng(32.862446,-117.233173),
    new google.maps.LatLng(32.862303,-117.233186),new google.maps.LatLng(32.862203,-117.233205),new google.maps.LatLng(32.862084,-117.233224),
    new google.maps.LatLng(32.861939,-117.233252),new google.maps.LatLng(32.861818,-117.233283),new google.maps.LatLng(32.861701,-117.233314),
    new google.maps.LatLng(32.861570,-117.233363),new google.maps.LatLng(32.861469,-117.233400),new google.maps.LatLng(32.861346,-117.233449),
    new google.maps.LatLng(32.861254,-117.233490),new google.maps.LatLng(32.861179,-117.233523),new google.maps.LatLng(32.861152,-117.233567),
    new google.maps.LatLng(32.861161,-117.233644),new google.maps.LatLng(32.861237,-117.233783),new google.maps.LatLng(32.861320,-117.233924),
    new google.maps.LatLng(32.861400,-117.234058),new google.maps.LatLng(32.861506,-117.234257),new google.maps.LatLng(32.861600,-117.234432),
    new google.maps.LatLng(32.861708,-117.234629),new google.maps.LatLng(32.861784,-117.234764),new google.maps.LatLng(32.861860,-117.234903),
    new google.maps.LatLng(32.861941,-117.235047),new google.maps.LatLng(32.862063,-117.235277),new google.maps.LatLng(32.862122,-117.235433),
    new google.maps.LatLng(32.862182,-117.235584),new google.maps.LatLng(32.862226,-117.235735),new google.maps.LatLng(32.862264,-117.235895),
    new google.maps.LatLng(32.862294,-117.236018),new google.maps.LatLng(32.862318,-117.236062),new google.maps.LatLng(32.862375,-117.236071),
    new google.maps.LatLng(32.862493,-117.236044),new google.maps.LatLng(32.862663,-117.236009),new google.maps.LatLng(32.862794,-117.235983),
    new google.maps.LatLng(32.862944,-117.235964),new google.maps.LatLng(32.863110,-117.235960),new google.maps.LatLng(32.863278,-117.235957),
    new google.maps.LatLng(32.863470,-117.235959),new google.maps.LatLng(32.863626,-117.235964),new google.maps.LatLng(32.863769,-117.235981),
    new google.maps.LatLng(32.863904,-117.236001),new google.maps.LatLng(32.864023,-117.236027)
	];path[xx++]=villaLaJollaPath;
	
	//Mapping coordinates for Villas Mallorca
	var villasMallorcaPath= [
	new google.maps.LatLng(32.867025,-117.236186),new google.maps.LatLng(32.867032,-117.235964),new google.maps.LatLng(32.867113,-117.235961),
	new google.maps.LatLng(32.867091,-117.235965),new google.maps.LatLng(32.867091,-117.233462),new google.maps.LatLng(32.866919,-117.233438),
	new google.maps.LatLng(32.866855,-117.233432),new google.maps.LatLng(32.866768,-117.233444),new google.maps.LatLng(32.866717,-117.233463),
	new google.maps.LatLng(32.866569,-117.233478),new google.maps.LatLng(32.866542,-117.233475),new google.maps.LatLng(32.866516,-117.233484),
	new google.maps.LatLng(32.866490,-117.233483),new google.maps.LatLng(32.866447,-117.233500),new google.maps.LatLng(32.866354,-117.233525),
	new google.maps.LatLng(32.866182,-117.233587),new google.maps.LatLng(32.866119,-117.233615),new google.maps.LatLng(32.866058,-117.233646),
	new google.maps.LatLng(32.866004,-117.233661),new google.maps.LatLng(32.865955,-117.233674),new google.maps.LatLng(32.865922,-117.233691),
	new google.maps.LatLng(32.865859,-117.233724),new google.maps.LatLng(32.865795,-117.233756),new google.maps.LatLng(32.865726,-117.233796),
	new google.maps.LatLng(32.865677,-117.233823),new google.maps.LatLng(32.865513,-117.233923),new google.maps.LatLng(32.865482,-117.233959),
	new google.maps.LatLng(32.865449,-117.233979),new google.maps.LatLng(32.865403,-117.234026),new google.maps.LatLng(32.865328,-117.234080),
	new google.maps.LatLng(32.865244,-117.234156),new google.maps.LatLng(32.865215,-117.234189),new google.maps.LatLng(32.865215,-117.234238),
	new google.maps.LatLng(32.865313,-117.234379),new google.maps.LatLng(32.865360,-117.234440),new google.maps.LatLng(32.865419,-117.234489),
	new google.maps.LatLng(32.865506,-117.234540),new google.maps.LatLng(32.865484,-117.234636),new google.maps.LatLng(32.865680,-117.234725),
	new google.maps.LatLng(32.865673,-117.234792),new google.maps.LatLng(32.865720,-117.234864),new google.maps.LatLng(32.865720,-117.234953),
	new google.maps.LatLng(32.865793,-117.234974),new google.maps.LatLng(32.865864,-117.235012),new google.maps.LatLng(32.865912,-117.235030),
	new google.maps.LatLng(32.865980,-117.235178),new google.maps.LatLng(32.866223,-117.235411),new google.maps.LatLng(32.866317,-117.235599),
	new google.maps.LatLng(32.866381,-117.235752),new google.maps.LatLng(32.866354,-117.235882),new google.maps.LatLng(32.866570,-117.235958),
	new google.maps.LatLng(32.866838,-117.236077),new google.maps.LatLng(32.867025,-117.236186),
	];path[xx++]=villasMallorcaPath;
	
	//Mapping coordinates for Villa Tuscana
	var villaTuscanaPath = [
	new google.maps.LatLng(32.861061,-117.235414),new google.maps.LatLng(32.861676,-117.235055),new google.maps.LatLng(32.860969,-117.233778),
	new google.maps.LatLng(32.860939,-117.233727),new google.maps.LatLng(32.860917,-117.233700),new google.maps.LatLng(32.860899,-117.233689),
	new google.maps.LatLng(32.860875,-117.233693),new google.maps.LatLng(32.860845,-117.233708),new google.maps.LatLng(32.860818,-117.233727),
	new google.maps.LatLng(32.860640,-117.233830),new google.maps.LatLng(32.860498,-117.233924),new google.maps.LatLng(32.860334,-117.234030),
	new google.maps.LatLng(32.860156,-117.234156),new google.maps.LatLng(32.860009,-117.234263),new google.maps.LatLng(32.859785,-117.234430),
	new google.maps.LatLng(32.859554,-117.234607),new google.maps.LatLng(32.859380,-117.234719),new google.maps.LatLng(32.859259,-117.234789),
	new google.maps.LatLng(32.859365,-117.235017),new google.maps.LatLng(32.859629,-117.234847),new google.maps.LatLng(32.859981,-117.235579),
	new google.maps.LatLng(32.860610,-117.235170),new google.maps.LatLng(32.860730,-117.235390),new google.maps.LatLng(32.860761,-117.235444),
	new google.maps.LatLng(32.860802,-117.235466),new google.maps.LatLng(32.860858,-117.235482),new google.maps.LatLng(32.860911,-117.235486),
	];path[xx++]=villaTuscanaPath;

	//Mapping coordinates for Villa Vicenza
	var villaVicenzaPath = [
	new google.maps.LatLng(32.870062,-117.225800),new google.maps.LatLng(32.870071,-117.225751),new google.maps.LatLng(32.870012,-117.225273),
    new google.maps.LatLng(32.869981,-117.225085),new google.maps.LatLng(32.869931,-117.224941),new google.maps.LatLng(32.869849,-117.224747),
    new google.maps.LatLng(32.869808,-117.224717),new google.maps.LatLng(32.869763,-117.224716),new google.maps.LatLng(32.869751,-117.224723),	
    new google.maps.LatLng(32.869526,-117.224869),new google.maps.LatLng(32.869354,-117.224936),new google.maps.LatLng(32.869115,-117.224990),
    new google.maps.LatLng(32.868642,-117.224983),new google.maps.LatLng(32.868590,-117.225004),new google.maps.LatLng(32.868560,-117.225043),
    new google.maps.LatLng(32.868555,-117.225102),new google.maps.LatLng(32.868526,-117.227061),new google.maps.LatLng(32.869079,-117.227088),
    new google.maps.LatLng(32.869132,-117.227064),new google.maps.LatLng(32.869206,-117.226996),new google.maps.LatLng(32.869255,-117.226928),
    new google.maps.LatLng(32.869279,-117.226878),new google.maps.LatLng(32.869308,-117.226635),new google.maps.LatLng(32.869326,-117.226429),
    new google.maps.LatLng(32.869389,-117.226222),new google.maps.LatLng(32.869467,-117.226111),new google.maps.LatLng(32.869930,-117.225895),
    new google.maps.LatLng(32.869978,-117.225848),new google.maps.LatLng(32.870027,-117.225835)
	];path[xx++]=villaVicenzaPath;
	
	//Mapping coordinates for Whispering Pines
	var	whisperingPinesPath = [
	new google.maps.LatLng(32.867060,-117.218347),new google.maps.LatLng(32.866982,-117.218167),new google.maps.LatLng(32.866862,-117.217894),
    new google.maps.LatLng(32.866677,-117.217471),new google.maps.LatLng(32.866614,-117.217329),new google.maps.LatLng(32.866523,-117.217101),
    new google.maps.LatLng(32.866443,-117.216871),new google.maps.LatLng(32.866390,-117.216665),new google.maps.LatLng(32.866316,-117.216290),
    new google.maps.LatLng(32.866301,-117.216107),new google.maps.LatLng(32.866287,-117.215835),new google.maps.LatLng(32.866285,-117.215532),
    new google.maps.LatLng(32.866302,-117.215307),new google.maps.LatLng(32.866312,-117.215231),new google.maps.LatLng(32.865714,-117.215124),
    new google.maps.LatLng(32.865191,-117.214588),new google.maps.LatLng(32.864602,-117.214012),new google.maps.LatLng(32.864246,-117.213627),
    new google.maps.LatLng(32.864238,-117.213730),new google.maps.LatLng(32.864216,-117.213857),new google.maps.LatLng(32.864207,-117.213899),
    new google.maps.LatLng(32.864207,-117.214178),new google.maps.LatLng(32.864199,-117.215044),new google.maps.LatLng(32.864188,-117.216307),
    new google.maps.LatLng(32.864205,-117.216342),new google.maps.LatLng(32.864240,-117.216384),new google.maps.LatLng(32.864314,-117.216390),
    new google.maps.LatLng(32.864708,-117.216393),new google.maps.LatLng(32.864961,-117.216393),new google.maps.LatLng(32.865394,-117.216403),
    new google.maps.LatLng(32.865465,-117.216397),new google.maps.LatLng(32.865538,-117.216378),new google.maps.LatLng(32.865606,-117.216368),
    new google.maps.LatLng(32.865678,-117.216365),new google.maps.LatLng(32.866045,-117.216373),new google.maps.LatLng(32.866251,-117.217939),
    new google.maps.LatLng(32.866438,-117.218346)
	];path[xx++]=whisperingPinesPath;

	//Mapping coordinates for Woodlands North
	var	woodlandsNorthPath = [
	new google.maps.LatLng(32.868151,-117.236071),new google.maps.LatLng(32.868095,-117.235489),new google.maps.LatLng(32.868109,-117.234837),
    new google.maps.LatLng(32.868097,-117.234220),new google.maps.LatLng(32.868095,-117.233701),new google.maps.LatLng(32.867772,-117.233610),
    new google.maps.LatLng(32.867677,-117.233582),new google.maps.LatLng(32.867484,-117.233535),new google.maps.LatLng(32.867091,-117.233465),
    new google.maps.LatLng(32.867091,-117.235960),new google.maps.LatLng(32.867113,-117.235961),new google.maps.LatLng(32.867421,-117.235964),
    new google.maps.LatLng(32.867739,-117.235977),new google.maps.LatLng(32.867935,-117.236007)
	];path[xx++]=woodlandsNorthPath;


	//Mapping coordinates for Woodlands South
	var	woodlandsSouthPath = [	
	new google.maps.LatLng(32.861517,-117.233126),new google.maps.LatLng(32.861551,-117.233078),new google.maps.LatLng(32.861563,-117.233028),
	new google.maps.LatLng(32.861578,-117.232994),new google.maps.LatLng(32.861595,-117.232946),new google.maps.LatLng(32.861632,-117.232894),
	new google.maps.LatLng(32.861643,-117.232850),new google.maps.LatLng(32.861643,-117.232663),new google.maps.LatLng(32.861642,-117.232522),
	new google.maps.LatLng(32.861651,-117.232300),new google.maps.LatLng(32.861652,-117.232230),new google.maps.LatLng(32.861675,-117.232056),
	new google.maps.LatLng(32.861684,-117.231849),new google.maps.LatLng(32.861702,-117.231673),new google.maps.LatLng(32.861705,-117.231514),
	new google.maps.LatLng(32.861748,-117.230615),new google.maps.LatLng(32.861741,-117.230583),new google.maps.LatLng(32.861723,-117.230563),
	new google.maps.LatLng(32.860774,-117.230771),new google.maps.LatLng(32.860753,-117.230792),new google.maps.LatLng(32.860742,-117.230846),
	new google.maps.LatLng(32.860741,-117.231178),new google.maps.LatLng(32.860730,-117.231797),new google.maps.LatLng(32.860721,-117.232368),
	new google.maps.LatLng(32.860723,-117.232516),new google.maps.LatLng(32.860730,-117.232740),new google.maps.LatLng(32.860788,-117.232982),
	new google.maps.LatLng(32.860921,-117.233277),new google.maps.LatLng(32.860971,-117.233322),new google.maps.LatLng(32.861039,-117.233322),
	new google.maps.LatLng(32.861147,-117.233256),new google.maps.LatLng(32.861317,-117.233182),new google.maps.LatLng(32.861437,-117.233141)
	];path[xx++]=woodlandsSouthPath;

	//Mapping coordinates for Woodlands West
	var	woodlandsWestPath = [  
	new google.maps.LatLng(32.860787,-117.233481),new google.maps.LatLng(32.860778,-117.233450),new google.maps.LatLng(32.860756,-117.233372),
    new google.maps.LatLng(32.860721,-117.233274),new google.maps.LatLng(32.860684,-117.233189),new google.maps.LatLng(32.860650,-117.233088),
    new google.maps.LatLng(32.860614,-117.233010),new google.maps.LatLng(32.860591,-117.232826),new google.maps.LatLng(32.860574,-117.232590),
    new google.maps.LatLng(32.860568,-117.232419),new google.maps.LatLng(32.860568,-117.232419),new google.maps.LatLng(32.860577,-117.232115),
    new google.maps.LatLng(32.860577,-117.231938),new google.maps.LatLng(32.860584,-117.231761),new google.maps.LatLng(32.860597,-117.231417),
    new google.maps.LatLng(32.860597,-117.231256),new google.maps.LatLng(32.860597,-117.231079),new google.maps.LatLng(32.860584,-117.230990),
    new google.maps.LatLng(32.860534,-117.230966),new google.maps.LatLng(32.860428,-117.230972),new google.maps.LatLng(32.860347,-117.230985),
    new google.maps.LatLng(32.860253,-117.230998),new google.maps.LatLng(32.860169,-117.231020),new google.maps.LatLng(32.860090,-117.231028),
    new google.maps.LatLng(32.859910,-117.231047),new google.maps.LatLng(32.859752,-117.231073),new google.maps.LatLng(32.859604,-117.231091),
    new google.maps.LatLng(32.859411,-117.231119),new google.maps.LatLng(32.859219,-117.231133),new google.maps.LatLng(32.859101,-117.231149),
    new google.maps.LatLng(32.858910,-117.231162),new google.maps.LatLng(32.858898,-117.231161),new google.maps.LatLng(32.858957,-117.231718),
    new google.maps.LatLng(32.859082,-117.232384),new google.maps.LatLng(32.859207,-117.233113),new google.maps.LatLng(32.859249,-117.233362),
    new google.maps.LatLng(32.859322,-117.233786),new google.maps.LatLng(32.859385,-117.234128),new google.maps.LatLng(32.859461,-117.234486),
    new google.maps.LatLng(32.859723,-117.234294),new google.maps.LatLng(32.859876,-117.234178),new google.maps.LatLng(32.859876,-117.234178),
    new google.maps.LatLng(32.860199,-117.233879),new google.maps.LatLng(32.860317,-117.233795),new google.maps.LatLng(32.860430,-117.233710),
    new google.maps.LatLng(32.860513,-117.233663),new google.maps.LatLng(32.860642,-117.233580),new google.maps.LatLng(32.860719,-117.233528),
    ];path[xx++]=woodlandsWestPath;
	
	
	/*
	//Mapping coordinates for La Jolla Canyon Apartments
	
	var	laJollaCanyonPath = [  
	new google.maps.LatLng(32.878658,-117.214188),new google.maps.LatLng(32.878699,-117.214149),new google.maps.LatLng(32.878777,-117.214010),
	new google.maps.LatLng(32.878870,-117.213841),new google.maps.LatLng(32.879001,-117.213619),new google.maps.LatLng(32.879234,-117.213257),
	new google.maps.LatLng(32.879340,-117.213169),new google.maps.LatLng(32.879464,-117.213161),new google.maps.LatLng(32.879460,-117.212905),
	new google.maps.LatLng(32.879448,-117.212850),new google.maps.LatLng(32.879430,-117.212832),new google.maps.LatLng(32.879388,-117.212807),
	new google.maps.LatLng(32.879352,-117.212793),new google.maps.LatLng(32.879207,-117.212728),new google.maps.LatLng(32.879048,-117.212626),
	new google.maps.LatLng(32.878809,-117.212470),new google.maps.LatLng(32.878661,-117.212379),new google.maps.LatLng(32.878551,-117.212274),
	new google.maps.LatLng(32.878411,-117.212188),new google.maps.LatLng(32.878201,-117.212113),new google.maps.LatLng(32.877845,-117.213453),
	new google.maps.LatLng(32.877743,-117.213772),new google.maps.LatLng(32.877744,-117.213813),new google.maps.LatLng(32.877758,-117.213843),
	new google.maps.LatLng(32.877782,-117.213873),new google.maps.LatLng(32.877837,-117.213889),new google.maps.LatLng(32.877910,-117.213904),
	new google.maps.LatLng(32.878077,-117.213947),new google.maps.LatLng(32.878226,-117.214003),new google.maps.LatLng(32.878420,-117.214089),
	new google.maps.LatLng(32.878543,-117.214156),new google.maps.LatLng(32.878616,-117.214192)	
	];path[xx++]=laJollaCanyonPath;

	//Mapping coordinates for Vista La Jolla Condos
	
	
	var	vistaLaJollaPath = [  	
	new google.maps.LatLng(32.882020,-117.219841),new google.maps.LatLng(32.882243,-117.219668),new google.maps.LatLng(32.882360,-117.219492),
	new google.maps.LatLng(32.882467,-117.219302),new google.maps.LatLng(32.882547,-117.219113),new google.maps.LatLng(32.882631,-117.218942),
	new google.maps.LatLng(32.882679,-117.218765),new google.maps.LatLng(32.882693,-117.218529),new google.maps.LatLng(32.882630,-117.218447),
	new google.maps.LatLng(32.882535,-117.218406),new google.maps.LatLng(32.882443,-117.218391),new google.maps.LatLng(32.882322,-117.218404),
	new google.maps.LatLng(32.882223,-117.218415),new google.maps.LatLng(32.882160,-117.218441),new google.maps.LatLng(32.882131,-117.218465),
	new google.maps.LatLng(32.881999,-117.218573),new google.maps.LatLng(32.881878,-117.218690),new google.maps.LatLng(32.881811,-117.218740),
	new google.maps.LatLng(32.881760,-117.218757),new google.maps.LatLng(32.881715,-117.218730),new google.maps.LatLng(32.881637,-117.218584),
	new google.maps.LatLng(32.881593,-117.218398),new google.maps.LatLng(32.881565,-117.218301),new google.maps.LatLng(32.881511,-117.218209),
	new google.maps.LatLng(32.881506,-117.218172),new google.maps.LatLng(32.881544,-117.218128),new google.maps.LatLng(32.881591,-117.218096),
	new google.maps.LatLng(32.881626,-117.218056),new google.maps.LatLng(32.881613,-117.217971),new google.maps.LatLng(32.881582,-117.217892),
	new google.maps.LatLng(32.881520,-117.217859),new google.maps.LatLng(32.881471,-117.217861),new google.maps.LatLng(32.881438,-117.217875),
	new google.maps.LatLng(32.881399,-117.217852),new google.maps.LatLng(32.881369,-117.217808),new google.maps.LatLng(32.881348,-117.217798),
	new google.maps.LatLng(32.881301,-117.217814),new google.maps.LatLng(32.881281,-117.217781),new google.maps.LatLng(32.881228,-117.217616),
	new google.maps.LatLng(32.881133,-117.217392),new google.maps.LatLng(32.881082,-117.217358),new google.maps.LatLng(32.881032,-117.217372),
	new google.maps.LatLng(32.880978,-117.217392),new google.maps.LatLng(32.880953,-117.217385),new google.maps.LatLng(32.880922,-117.217345),
	new google.maps.LatLng(32.880681,-117.216821),new google.maps.LatLng(32.880510,-117.216944),new google.maps.LatLng(32.880878,-117.217737),
	new google.maps.LatLng(32.881283,-117.218582),new google.maps.LatLng(32.881377,-117.218796),new google.maps.LatLng(32.881583,-117.219164),
	new google.maps.LatLng(32.881790,-117.219516)
	];path[xx++]=vistaLaJollaPath;
	*/