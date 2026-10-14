<?php
$host = 'localhost'; 
$user = 'root'; 
$db = "db";
$pass = ''; 


 try{


 $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

 $sql = "CREATE TABLE test (id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 username VARCHAR(255) NOT NULL, 
 password VARCHAR(255) NOT NULL)";

 $conn->exec($sql);

    echo "Test";
 }catch(Exception $e){


    echo"Not connected".$e->getMessage();
 }



?>
import React from 'react';
import { View, Text, StyleSheet, FlatList } from 'react-native';


class PostsScreen extends React.Component{


    constructor(){
        super();
        this.state = {
            posts: []
        }
    }


    async componentDidMount(){
        const data = await fetch("https://jsonplaceholder.typicode.com/posts");
        const jsonData = await data.json();
        this.setState({posts: jsonData});
    }
    
    render(){
        const {posts} = this.state
        return(
            <View>
                <Text>Posts</Text>
                <FlatList 
                keyExtractor = {posts => posts.id}
                data={posts} renderItem={({item}) => (
                    <View>
                        <Text>{item.id}</Text>
                        <Text>{item.title}</Text>
                    </View>
                )}/>
            </View>
        );
    }
}


const styles = StyleSheet.create({});


export default PostsScreen; https://jsonplaceholder.typicode.com/