const encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!encore.isRuntimeEnvironmentConfigured()) {
    encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

encore
    .setOutputPath('public/assets/')    // The output path for generated files
    .setPublicPath('/assets')           // Public path that the web server will use

    // Copy images
    .copyFiles({
        from: './assets/img',
        to: 'img/[path][name].[ext]',
    })

    // Copy fonts
    .copyFiles({
        from: './assets/fonts',
        to: 'fonts/[path][name].[ext]',
    })

    /*
     * ENTRY CONFIG
     */
    .addEntry('app', './assets/app.ts')
    .addEntry('login', './assets/app.ts') // This can be changed to something different later, if using different JS/CSS

    .splitEntryChunks()         // For optimisation
    .enableSingleRuntimeChunk() // Will require an extra script tag for runtime.js

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    // TypeScript Support
    .enableForkedTypeScriptTypesChecking()
    .enableTypeScriptLoader()

    // enables Sass/SCSS support
    .enableSassLoader()

    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()

    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    .enableSourceMaps(!encore.isProduction())
    .enableVersioning(encore.isProduction()) // Hashed filenames

    .enableIntegrityHashes(encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()
;

module.exports = encore.getWebpackConfig();
