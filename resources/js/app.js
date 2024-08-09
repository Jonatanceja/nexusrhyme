import './bootstrap';

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import example from './components/AlpineExample'
Alpine.data('example', example)
window.Alpine = Alpine
Alpine.start()

// Fancybox
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });


