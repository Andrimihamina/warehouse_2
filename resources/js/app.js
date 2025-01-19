import './bootstrap.js';

// Importation des bibliothèques nécessaires
import { createApp } from 'vue'; // Importation de Vue

import App from './components/App.vue'; // Le composant racine de l'application

// Créer une instance de l'application Vue
const app = createApp(App);

app.use(router);
// Monter l'application sur un élément HTML
app.mount('#app'); // Le point d'entrée de l'application
