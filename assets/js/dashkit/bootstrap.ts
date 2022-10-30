import {
    Alert,
    Button,
    Carousel,
    Collapse,
    Dropdown,
    Modal,
    Offcanvas,
    Popover,
    ScrollSpy,
    Tab,
    Toast,
    Tooltip,
} from 'bootstrap';

// Make available globally
declare global {
    interface Window {
        Alert: Alert
        Button: Button
        Carousel: Carousel
        Collapse: Collapse
        Dropdown: Dropdown
        Modal: Modal
        Offcanvas: Offcanvas
        Popover: Popover
        ScrollSpy: ScrollSpy
        Tab: Tab
        Toast: Toast
        Tooltip: Tooltip
    }
}

window.Alert = Alert;
window.Button = Button;
window.Carousel = Carousel;
window.Collapse = Collapse;
window.Dropdown = Dropdown;
window.Modal = Modal;
window.Offcanvas = Offcanvas;
window.Popover = Popover;
window.ScrollSpy = ScrollSpy;
window.Tab = Tab;
window.Toast = Toast;
window.Tooltip = Tooltip;
