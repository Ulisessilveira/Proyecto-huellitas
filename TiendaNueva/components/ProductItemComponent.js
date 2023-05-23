import {StyleSheet, View, Text , TouchableWithoutFeedback, ImageBackground} from"react-native"
export default function ProductItemComponent(){
    return (
         <TouchableWithoutFeedback onPress={ ()=>{} }>
            <View>
                <ImageBackground source={{uri:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRytf_BpNDznFAdeXKNsuQlAwtmxS1osZl4FQ&usqp=CAU"}}
                resizeMode='cover' 
                style={styles.image} imageStyle={{borderRadius:25}}/>
                <View>
                    <Text>Carrito HotWheels</Text>
                    <Text>$39.00</Text>

                </View>
            </View>
         </TouchableWithoutFeedback>
    )

}
const styles = StyleSheet.create({
    image: {
        margin:20,
        height:320,
        justifyContent: "center",
        padding:0,
        zIndex:1
    },

})