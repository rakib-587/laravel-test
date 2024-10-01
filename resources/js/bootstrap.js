import axios from "axios";
window.axios = axios;

window.axios.defaults.baseURL = window.config.baseUrl;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
