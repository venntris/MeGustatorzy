import Home from './components/pages/Home';
import Room from './components/pages/Room';
import Products from './components/pages/Products';
import Locals from './components/pages/Locals';
import Users from './components/pages/Users';
import Dashboard from './components/pages/Dashboard';


export default{
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/room',
            component: Room
        },
        {
            path: '/products',
            component: Products
        },
        {
            path: '/locals',
            component: Locals
        },
        {
            path: '/users',
            component: Users
        },
        {
            path: '/dasboard',
            component: Dashboard
        },

    ]
}
