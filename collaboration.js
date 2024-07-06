document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        
        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');
        
        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});

document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');

        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});


document.querySelectorAll('.slide ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        const targetId = event.target.getAttribute('href').substring(1);
        const sections = document.querySelectorAll('.content');

        sections.forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(targetId).style.display = 'block';
    });
});

const composeForm = document.getElementById('compose-form');
composeForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const recipient = document.getElementById('recipient').value;
    const subject = document.getElementById('subject').value;
    const messageBody = document.getElementById('message-body').value;

    // Example: Adding the composed message to the Sent Messages list
    const sentList = document.getElementById('sent-list');
    const newMessage = document.createElement('li');
    newMessage.innerHTML = `
        <div class="message-header">
            <span class="recipient">${recipient}</span>
            <span class="timestamp">${new Date().toLocaleDateString()}</span>
        </div>
        <div class="subject">${subject}</div>
    `;
    sentList.appendChild(newMessage);

    // Clear form fields
    composeForm.reset();
});
