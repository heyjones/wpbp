const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const WebfontPlugin = require('webpack-webfont').default;
const extractSass =  new ExtractTextPlugin({
    filename: "./dist/styles/[name].css"
});
const path = require('path');

module.exports = {
    entry: {
        wpbp: ['./assets/scripts/wpbp.js', './assets/styles/wpbp.scss'],
        admin: ['./assets/scripts/admin.js', './assets/styles/admin.scss']
    },
    output: {
        filename: './dist/scripts/[name].js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            },
            {
            test: /\.scss$/,
            use: extractSass.extract({
                use: [{
                    loader: "css-loader"
                },{
                    loader: "sass-loader",
                    options: {
                        outputStyle: 'compressed'
                    }
                }]
            })
        }]
    },
    plugins: [
        extractSass,
        new webpack.optimize.UglifyJsPlugin(),
        new CopyWebpackPlugin([{
            from: './assets/images/',
            to: './dist/images'
        }]),
        new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i }),
        new WebfontPlugin({
            files: path.resolve(__dirname, './assets/icons/*.svg'),
            css: true,
            template: 'css',
            cssTemplateFontPath: './',
            fontName: 'wpbp',
            dest: {
                fontsDir: path.resolve(__dirname, './dist/icons'),
                css: path.resolve(__dirname, './dist/icons/test.css'),
            },
            descent: 0
        })
    ]

};
