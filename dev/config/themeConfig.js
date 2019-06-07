'use strict';

module.exports = {
	theme: {
		slug: 'wprig',
		name: 'WP Rig',
		author: 'Morten Rand-Hendriksen'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'localhost/gaxtheme/',
			bypassPort: '8181'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
