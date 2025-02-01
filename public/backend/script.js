// User Management
const users = JSON.parse(localStorage.getItem('users')) || [];
let currentUser = JSON.parse(localStorage.getItem('currentUser')) || null;

// Check if user is logged in
function checkAuth() {
    const dashboard = document.getElementById('dashboard');
    const authPages = document.getElementById('authPages');
    
    if (currentUser) {
        dashboard.classList.remove('hidden');
        authPages.classList.add('hidden');
        document.querySelectorAll('#userName').forEach(el => {
            el.textContent = currentUser.name;
        });
    } else {
        dashboard.classList.add('hidden');
        authPages.classList.remove('hidden');
    }
}

// Toggle between login and register forms
function toggleForms(form) {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    if (form === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
    } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
    }
}

// Handle Registration
function handleRegister(event) {
    event.preventDefault();
    
    const name = document.getElementById('registerName').value;
    const email = document.getElementById('registerEmail').value;
    const password = document.getElementById('registerPassword').value;
    
    // Check if user already exists
    if (users.find(user => user.email === email)) {
        alert('User already exists with this email');
        return false;
    }
    
    // Create new user
    const newUser = { name, email, password };
    users.push(newUser);
    localStorage.setItem('users', JSON.stringify(users));
    
    alert('Registration successful! Please login.');
    toggleForms('login');
    return false;
}

// Handle Login
function handleLogin(event) {
    event.preventDefault();
    
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    
    // Find user
    const user = users.find(u => u.email === email && u.password === password);
    
    if (user) {
        currentUser = user;
        localStorage.setItem('currentUser', JSON.stringify(user));
        checkAuth();
    } else {
        alert('Invalid email or password');
    }
    
    return false;
}

// Handle Logout
function handleLogout() {
    currentUser = null;
    localStorage.removeItem('currentUser');
    checkAuth();
}

// Dashboard Tab Switching
function switchTab(tabId) {
    // Remove active class from all tabs
    document.querySelectorAll('.dashboard-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Remove active class from all sidebar items
    document.querySelectorAll('.sidebar-nav li').forEach(item => {
        item.classList.remove('active');
    });
    
    // Add active class to selected tab
    document.getElementById(tabId).classList.add('active');
    
    // Add active class to sidebar item
    const sidebarItem = document.querySelector(`.sidebar-nav a[onclick="switchTab('${tabId}')"]`).parentElement;
    sidebarItem.classList.add('active');
}

// Initialize the application
document.addEventListener('DOMContentLoaded', () => {
    checkAuth();
});