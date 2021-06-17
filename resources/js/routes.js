import Logo from './componets/Logo';
import LogoSymbol from './componets/LogoSymbol';
import Colors from './componets/Colors';
import LoadersAndAnimation from './componets/LoadersAndAnimation';
import Mascot from './componets/Mascot';
import Typography from './componets/Typography';
import Wallpapers from './componets/Wallpapers';
import Illustrution from './componets/Illustrution';
import NotFound from './componets/NotFound';



export default {
    mode: "history",
    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/Logo-Symbol',
            component: LogoSymbol
        },

        {
            path: '/Colors',
            component: Colors
        },

        {
            path: '/Loaders-and-animation',
            component: LoadersAndAnimation
        },

        {
            path: '/Mascot',
            component: Mascot
        },
        {
            path: '/Typography',
            component: Typography
        },
        {
            path: '/Wallpapers',
            component: Wallpapers
        },

        {
            path: '/Illustrution',
            component: Illustrution
        },
    ]
}
