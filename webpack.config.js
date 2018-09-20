const path = require('path')
const webpack = require('webpack')
const HtmlWebpackPlugin = require('html-webpack-plugin')

const paths = {
    DIST: path.resolve(__dirname, 'dist'),
    SRC: path.resolve(__dirname),
}

module.exports = {
    entry: {
        index: path.join(paths.SRC, 'index.js')
    },
    devServer: {
        contentBase: paths.SRC
    },
    output: {
        path: paths.DIST,
        filename: 'app.bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.ejs$/,
                loader: 'ejs-compiled-loader'
            }
        ],
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: path.join(paths.SRC, 'index.ejs'),
        })
    ],
}