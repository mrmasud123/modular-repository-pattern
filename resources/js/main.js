import './echo';
import $ from 'jquery'
console.log("Application connected");



$(".selectUser").click(function () {
    const receiverId = $(this).attr('data-user-id');
    fetch(`/load-messages/${receiverId}`).
        then((res) => res.json()).
        then((data) => console.log(data)).
        catch((err) => console.log(err));
});

// Auto-scroll to bottom
const $cont = $('#messageBox');
if ($cont.length) {
    $cont.scrollTop($cont[0].scrollHeight);
}

/* Connection debug */
if (window.Echo && window.Echo.connector && window.Echo.connector.pusher) {
    window.Echo.connector.pusher.connection.bind('state_change', function(states) {
        console.log(states);
    });
}

/* Real-time listener */
Echo.channel('chat-channel')
    .listen('MessageSent', function(e) {
        appendMessage(e.message);
        console.log(e);
    });

/* Append message to UI */
function appendMessage(message) {
    const $container = $('#messages');
    if (!$container.length) return;

    const messageHTML = `
        <div class="flex justify-end">
            <div class="bg-blue-500 text-white px-4 py-2 rounded-2xl max-w-xs">
                ${message}
            </div>
        </div>
    `;

    $container.append(messageHTML);
    $container.scrollTop($container[0].scrollHeight);
}

/* Send message via AJAX */
const $form = $('#chatForm');

if ($form.length) {
    $form.on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const token = $('input[name="_token"]').val();

        $.ajax({
            url: '/send',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data);
                $form[0].reset(); // clear inputs
            },
            error: function(err) {
                console.error(err);
            }
        });
    });
}