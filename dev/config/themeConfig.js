'use strict';

module.exports = {
	theme: {
		slug: 'gaxthemev2',
		name: 'GAX Theme',
		author: 'Geovanny Lacayo'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'localhost/gaxthemev2/',
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
