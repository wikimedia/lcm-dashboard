( function ( $ ) {
	'use strict';

	var bnProbhat = {
		id: 'bn-probhat',
		name: 'Bengali Probhat',
		description: 'Bengali Probhat input method for Assamese',
		date: '2012-10-10',
		URL: 'http://github.com/wikimedia/jquery.ime',
		author: 'Nasir Khan Saikat',
		license: 'GPLv3',
		version: '1.0',
		contextLength: 0,
		maxKeyLength: 0,
		patterns: [
			['1', '১'],
			['2', '২'],
			['3', '৩'],
			['4', '৪'],
			['5', '৫'],
			['6', '৬'],
			['7', '৭'],
			['8', '৮'],
			['9', '৯'],
			['0', '০'],

			['q', 'দ'],
			['w', 'ূ'],
			['e', 'ী'],
			['r', 'র'],
			['t', 'ট'],
			['y', 'এ'],
			['u', 'ু'],
			['i', 'ি'],
			['o', 'ও'],
			['p', 'প'],

			['a', 'া'],
			['s', 'স'],
			['d', 'ড'],
			['f', 'ত'],
			['g', 'গ'],
			['h', 'হ'],
			['j', 'জ'],
			['k', 'ক'],
			['l', 'ল'],

			['z', 'য়'],
			['x', 'শ'],
			['c', 'চ'],
			['v', 'আ'],
			['b', 'ব'],
			['n', 'ন'],
			['m', 'ম'],

			['Q', 'ধ'],
			['W', 'ঊ'],
			['E', 'ঈ'],
			['R', 'ড়'],
			['T', 'ঠ'],
			['Y', 'ঐ'],
			['U', 'উ'],
			['I', 'ই'],
			['O', 'ঔ'],
			['P', 'ফ'],

			['A', 'অ'],
			['S', 'ষ'],
			['D', 'ঢ'],
			['F', 'থ'],
			['G', 'ঘ'],
			['H', 'ঃ'],
			['J', 'ঝ'],
			['K', 'খ'],
			['L', 'ং'],

			['Z', 'য'],
			['X', 'ঢ়'],
			['C', 'ছ'],
			['V', 'ঋ'],
			['B', 'ভ'],
			['N', 'ণ'],
			['M', 'ঙ'],

			['`', '\u200D'],
			['\\$', '৳'],
			['\\&', 'ঞ'],
			['\\*', 'ৎ'],
			['\\[', 'ে'],
			['\\]', 'ো'],
			['\\{', 'ৈ'],
			['\\}', 'ৌ'],
			['\\|', '॥'],
			['\\.', '।'],
			['/', '্'],
			['<', 'ৃ'],
			['>', 'ঁ'],
			['\\\\', '\u200C']]
	};
	$.ime.register( bnProbhat );

}( jQuery ) );
