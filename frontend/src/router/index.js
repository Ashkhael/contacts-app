import { createRouter, createWebHistory } from "vue-router";
import ContactsListView from "@/views/ContactsListView.vue";
import ContactCreateView from "@/views/ContactCreateView.vue";
import ContactDetailView from "@/views/ContactDetailView.vue";
import ContactUpdateView from "@/views/ContactUpdateView.vue";
import FavoritesView from "@/views/FavoritesView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "All contacts",
      alias:"/contacts",
      component: ContactsListView,
    },
    {
      path:"/contacts/:id",
      name:"Contact Details",
      component: ContactDetailView,
    },
    {
      path: "/contacts/update/:id",
      name: "Update",
      component: ContactUpdateView,
    },
    {
      path: "/contacts/create",
      name: "New contact",
      component: ContactCreateView,
    },
    {
      path: "/favorites",
      name: "My favorites",
      component: FavoritesView,
    },
  ],
});

export default router;
