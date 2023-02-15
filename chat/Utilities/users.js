class Users {
    constructor() {
        this.users = [];
    }

    addUser(id, room) {
        const user = { id, room };


        this.users.push(user);
        return user;
    }

    removeUser(id) {

        console.log('Comming Socket id ', id);

        const user = this.getSocketId(id);

        console.log('Comming Group users according socket id ', user);

        if (user) {
            this.users = this.users.filter((user) => user.id != id);
        }
        return user;
    }

    getUser(room_id) {

        return this.users.filter((user) => user.room === room_id)[0];
    }


    getSocketId(id) {
        return this.users.filter((user) => user.id === id)[0];
    }

}

module.exports = { Users };