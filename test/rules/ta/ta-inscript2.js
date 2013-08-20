( function ( $ ) {
	'use strict';

	var taInScript2 = {
		id: 'ta-inscript2',
		name: 'இன்ஸ்கிரிப்ட் 2',
		description: 'Enhanced InScript Keyboard for Tamil',
		date: '2013-01-16',
		URL: 'http://github.com/wikimedia/jquery.ime',
		author: 'Parag Nemade',
		license: 'GPLv3',
		version: '1.0',
		patterns: [
			["1", "௧"],
			["2", "௨"],
			["3", "௩"],
			["4", "௪"],
			["5", "௫"],
			["\\^", "த்ர"],
			["6", "௬"],
			["\\&", "க்ஷ"],
			["7", "௭"],
			["\\*", "ஷ்ர"],
			["8", "௮"],
			["\\(", "("],
			["9", "௯"],
			["\\)", ")"],
			["0", "௦"],
			["\\_", "ஃ"],
			["\\-", "-"],
			["\\=","="],
			["Q", "ஔ"],
			["q", "ௌ"],
			["W", "ஐ"],
			["w", "ை"],
			["E", "ஆ"],
			["e", "ா"],
			["R", "ஈ"],
			["r", "ீ"],
			["T", "ஊ"],
			["t", "ூ"],
			["y", "y"],
			["U", "ங"],
			["u", "ஹ"],
			["p", "ஜ"],
			["\\}", "ஞ"],
			["A", "ஓ"],
			["a", "ோ "],
			["S", "ஏ"],
			["s", "ே"],
			["D", "அ"],
			["d", "்"],
			["F", "இ"],
			["f", "ி"],
			["G", "உ"],
			["g", "ு"],
			["h", "ப"],
			["J", "ற"],
			["j", "ர"],
			["k", "க"],
			["l", "த"],
			[";", "ச"],
			["\\'", "ட"],
			["\\~", "ஒ"],
			["\\`", "ொ"],
			["Z", "எ"],
			["z", "ெ"],
			["x", "ஂ"],
			["X", "X"],
			["C", "ண"],
			["c", "ம"],
			["V", "ன"],
			["v", "ந"],
			["B", "ழ"],
			["b", "வ"],
			["N", "ள"],
			["n", "ல"],
			["M", "ஶ"],
			["m", "ஸ"],
			["\\<", "ஷ"],
			[",", ","],
			["\\>", "।"],
			["\\.", "."],
			["/", "ய"]
		],
		patterns_x: [
			["1", "‍"],
			["2", "‌"],
			["4", "₹"],
			["0", "௰"],
			["\\-", "௱"],
			["\\=", "௲"],
			["y", "௷"],
			["h", "௶"],
			["X", "ௐ"],
			["C", "௸"],
			["c", "௴"],
			["V", "௺"],
			["v", "௳"],
			["b", "௵"],
			[",", "௹"],
			[".", "॥"]
		]
	};
	$.ime.register( taInScript2 );

}( jQuery ) );
