import {
    PhChartBar,
    PhGitFork,
    PhArticle,
    PhGear,
} from "@phosphor-icons/vue";
import { ref } from "vue";

const menuId = ref();

const handleDropdown = (id) => {
    if (menuId.value != id) {
        menuId.value = id;
        return;
    }

    menuId.value = null;
};
const useAside = () => {
    const menu = [
        {
            id: 1,
            iconName: PhChartBar,
            to: route("admin.dashboard"),
            title: "Dashboard",
        },
        // {
        //     id: 2,
        //     iconName: PhCommand,
        //     to: route("admin.brands.index"),
        //     title: "Brands",
        // },
        {
            id: 2,
            iconName: PhGitFork,
            to: route("admin.categories.index"),
            title: "Categories",
        },
        {
            id: 3,
            iconName: PhArticle,
            to: route("admin.posts.index"),
            title: "Posts",
        },
        {
            id: 4,
            iconName: PhGear,
            to: route("admin.settings.index"),
            title: "Settings",
        },
    ];

    return {
        menuId,
        menu,
        handleDropdown,
    };
};

export default useAside;
