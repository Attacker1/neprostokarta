// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick';

// Import components
import './components/header/init'
import './components/hello/init'
import './components/payment/init'
import './components/experience/init'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
