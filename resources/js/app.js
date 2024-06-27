import './bootstrap';
import 'doodle.css/doodle.css';

import { createApp } from 'vue';
import welcome from './Vue/components/welcome.vue';

const app = createApp(welcome);
app.mount('#app');
