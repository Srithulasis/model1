// Sample user data (should be replaced with actual user data)
const users = [
    { name: 'kavi', email: 'kavi@gmail.com' },
    { name: 'koshal', email: 'koshal@gmail.com' },
    // Add more user objects as needed
];

// Function to edit a user
function editUser(index) {
    const user = users[index];
    if (user) {
        const newName = prompt('Enter the new name:', user.name);
        if (newName !== null) {
            user.name = newName;
            updateUserList();
        }
    }
}

// Function to delete a user
function deleteUser(index) {
    const user = users[index];
    if (user && confirm(`Are you sure you want to delete ${user.name}?`)) {
        users.splice(index, 1);
        updateUserList();
    }
}

// Function to update the user list
function updateUserList() {
    const userContainer = document.querySelector('.user-list');
    userContainer.innerHTML = ''; // Clear the list

    users.forEach((user, index) => {
        const userDiv = document.createElement('div');
        userDiv.className = 'user';
        userDiv.innerHTML = `
            <p>Name: ${user.name}</p>
            <p>Email: ${user.email}</p>
            <button class="edit-button" onclick="editUser(${index})">Edit</button>
            <button class="delete-button" onclick="deleteUser(${index})">Delete</button>
        `;
        userContainer.appendChild(userDiv);
    });
}

// Initialize the user list
updateUserList();
