const mqtt = require('mqtt')
const mysql = require('mysql')

const db = mysql.createConnection({
    host:"localhost",
    port:3306,
    user:'root',
    password:'',
    database:'glosario'
})

db.connect(() =>{
    console.log('Database OK!');
})

const sub = mqtt.connect('mqtt://localhost:9000')

sub.on('connect', () => {
    sub.subscribe('topic test')
})


//Sensor ultrasonico
/*sub.on('message', (topic, message) => {
    message = message.toString()
    message = message.split(' ')
    message = parseInt(message[1])
    console.log(message)
    db.query(
        'insert into ultrasonico set ?', 
        {cm: message},
        (err, rows) => {
            if(!err) console.log('Data saved');
        }
    )
})
*/

//DHT11
/*sub.on('message', (topic, message) => {
    message = message.toString()
    message = message.split(' ')
    message = parseInt(message[1])
    console.log(message)
    db.query(
        'insert into dhthum set ?', 
        {humedad: message},
        (err, rows) => {
            if(!err) console.log('Data 1 saved');
        }
    )
})

sub.on('message', (topic, message) => {
    message = message.toString()
    message = message.split(' ')
    message = parseInt(message[2])
    console.log(message)
    db.query(
        'insert into dhttemp set ?',
        {temp: message},
        (err, rows) => {
            if(!err) console.log('data 2 saved!')
        }
    )
})
*/

//Sensor ir
sub.on('message', (topic, message) => {
    message = message.toString()
    message = message.split(' ')
    message = parseInt(message[0])
    console.log(message)
    db.query(
        'insert into infrarojo set ?',
        {dato: message},
        (err, rows) => {
            if(!err) console.log('status saved!')
        }
    )
})
