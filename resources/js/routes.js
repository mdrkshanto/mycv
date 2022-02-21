import Home from '../components/backEnd/home/index'
import AddHome from '../components/backEnd/home/Add'
import UserBasic from '../components/backEnd/userBasic/index'
import AddUserBasic from '../components/backEnd/userBasic/Add'
import EditUserBasic from '../components/backEnd/userBasic/Edit'
import Users from '../components/backEnd/users/index'
import AddUser from '../components/backEnd/users/Add'
export const routes = [
    {
        path: '/',
    },
    {
        path: '/home',
        name: "home",
        meta: {
            title: 'Home',
            page: 'Home Contents',
            cardTitle: 'List',
            buttonLink: 'addHome',
            buttonTitle: 'Add new',
            buttonIcon: `<i class="fa-duotone fa-plus"></i>`,
        },
        component: Home
    },
    {
        path: '/add-home',
        name: "addHome",
        meta: {
            title: 'Home',
            page: 'Add Home',
            cardTitle: 'Add new',
            buttonLink: 'home',
            buttonTitle: 'Back',
            buttonIcon: `<i class="fa-duotone fa-left"></i>`,
        },
        component: AddHome
    },
    {
        path: '/user-basic',
        name: "userBasic",
        meta: {
            title: 'Users Basic',
            page: 'Users Basic',
            cardTitle: 'List',
            buttonLink: 'addUserBasic',
            buttonTitle: 'Add new',
            buttonIcon: `<i class="fa-duotone fa-plus"></i>`,
        },
        component: UserBasic
    },
    {
        path: '/add-user-basic',
        name: "addUserBasic",
        meta: {
            title: 'Users',
            page: 'Add Users',
            cardTitle: 'Add new',
            buttonLink: 'userBasic',
            buttonTitle: 'Back',
            buttonIcon: `<i class="fa-duotone fa-left"></i>`,
        },
        component: AddUserBasic
    },
    {
        path: '/edit-user-basic',
        name: "editUserBasic",
        meta: {
            title: 'Users',
            page: 'Add Users',
            cardTitle: 'Add new',
            buttonLink: 'userBasic',
            buttonTitle: 'Back',
            buttonIcon: `<i class="fa-duotone fa-left"></i>`,
        },
        component: EditUserBasic
    },
    {
        path: '/users',
        name: "users",
        meta: {
            title: 'Users',
            page: 'All Users',
            cardTitle: 'List',
            buttonLink: 'addUser',
            buttonTitle: 'Back',
            buttonIcon: `<i class="fa-duotone fa-plus"></i>`,
        },
        component: Users
    },
    {
        path: '/add-user',
        name: "addUser",
        meta: {
            title: 'Users',
            page: 'Add Users',
            cardTitle: 'Add new',
            buttonLink: 'users',
            buttonTitle: 'Back',
            buttonIcon: `<i class="fa-duotone fa-left"></i>`,
        },
        component: AddUser
    },
    // {
    //     path: '/add-user',
    //     name: "addUser",
    //     meta: {
    //         title: 'Users',
    //         page: 'Add Users',
    //         cardTitle: 'Add new',
    //         buttonLink: 'users',
    //         buttonTitle: 'Back',
    //         buttonIcon: `<i class="fa-duotone fa-left"></i>`,
    //     },
    //     component: AddUser
    // },
]
