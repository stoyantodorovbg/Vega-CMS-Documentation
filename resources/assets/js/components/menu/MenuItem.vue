<template>
    <div :class="menuItemData.classes + ' ' + sidebarActiveClass"
         :style="menuItemData.styles">
        <a v-if="menuItemData.title && menuItemData.title.status"
                :href="$helpers[menuItemData.prefix + 'UrlPrefix']($store.getters.locale) + menuItemData.url"
                :class="menuItemData.title.classes"
                :style="menuItemData.title.styles"
            >
            {{ menuItemData.title.text }}
        </a>
        <div v-if="menuItemData.description && menuItemData.description.status"
             :class="menuItemData.description.classes"
             :style="menuItemData.description.styles"
        >
            {{ menuItemData.description.text }}
        </div>
        <menu-items-container
            v-for="menuItem in menuItemData.menuItems"
            :key="menuItem.id"
            :menuItemData="menuItem"
        ></menu-items-container>
    </div>
</template>

<script>
    import EventBus from "../../eventBus";

    export default {
        name: 'menu-item',

        components: {
            MenuItemsContainer: () => import('./MenuItemsContainer.vue'),
        },

        props: {
            menuItemData: {
                type: Object,
                default: function () {
                    return {
                        id: 1,
                        classes: 'text-uppercase',
                        url: '/',
                        title: {
                            classes: '',
                            status: 0,
                            text: 'menu item',
                            structure: {
                                classes: {
                                    type: 'text',
                                },
                                status: {
                                    type: 'text',
                                },
                                styles: {
                                    nested: [],
                                    type: 'json'
                                },
                                text: {
                                    type: 'text',
                                },
                            },
                            styles: [],
                        },
                        description: {
                            classes: '',
                            status: 0,
                            text: 'simple menu item',
                            structure: {
                                classes: {
                                    type: 'text',
                                },
                                status: {
                                    type: 'text',
                                },
                                styles: {
                                    nested: [],
                                    type: 'json'
                                },
                                text: {
                                    type: 'text',
                                },
                            },
                            styles: [],
                        },
                        styles: [],
                    };
                }
            }
        },

        data() {
            return {
                sidebarActiveClass: '',
            }
        },

        mounted() {
            this.setSidebarActiveClass();
        },

        methods: {
            setSidebarActiveClass() {
                if (window.location.pathname === '/' + this.menuItemData.url) {
                    return  this.sidebarActiveClass = 'sidebar-active';
                }
                return  this.sidebarActiveClass =  '';
            }
        }
    }
</script>
