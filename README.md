# Rebuilding twitter using tailwindcss

## Tailwind Laravel installation [Windows]

<ul>
    <li>Install Tailwind via npm: <code>npm install tailwindcss --save-dev</code></li>
    <li>Create a Tailwind config file: <code>.\node_modules\.bin\tailwind init</code></li>
    <li>Create <code>main.css</code> under <code>resources/css</code> to store your main stylesheet and then pass it in your <code>welcome.blade.php</code></li>
    <li>Also, add tailwindcss laravel mix and browserSync configurations in your <code>webpack.mix.js</code> and run <code>npm run watch</code> which will install all dependencies.</li>
    <li>Lastly, serve the port using <code>php artisan serve</code> command</li>
    <li>Voila, your website is live and whenever you make any changes your browser will sync automatically</li>
</ul>
