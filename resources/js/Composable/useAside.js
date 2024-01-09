import {
    PhChartBar,
    PhGitFork,
    PhArticle,
    PhGear,
    PhUserList,
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
            iconName: PhUserList,
            to: route("admin.users.index"),
            title: "Users",
        },
    ];

    return {
        menuId,
        menu,
        handleDropdown,
    };
};

export default useAside;
