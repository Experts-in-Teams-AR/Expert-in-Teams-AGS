<x-app-layout>
    <body>
        <h1 class='admin-header'>Welcome to Admin Page!</h1>
        <div class='admin-buttons'>
            <div class=create-button>
                <a href="/create">
                    <button>Create</button>
                </a>
            </div>
            <div class=update-button>
                <a href="/update">
                    <button>Update</button>
                </a>
            </div>
            <div class=delete-button>
                <a href="/delete">
                    <button>Delete</button>
                </a>
            </div>
        </div>
    </form>
    </body>
</x-app-layout>


<!-- We could use this page as the home page so when user logs in this page is shown where he can navigate to the different parts of the app. -->
<!-- The different pages should be tailored to this app. Library page could be used as showing visualisation. Create page could be used for pairing devices. etc. -->
<!-- Keep in mind that all the controllers, routes, views and migrations should be configured when modifying the different pages, the current files in these sections are just placeholders for now. -->
