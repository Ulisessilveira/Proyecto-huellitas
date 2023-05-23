import {View,Text,ScrollView} from"react-native"
import HeaderComponent from "../layouts/HeaderComponent"
import ProductItemComponent from "../../components/ProductItemComponent" 

export default function HomeComponent() {
  let data = [
    { id:1,name:'Producto 1', price:200},
    { id:2,name:'Producto 2', price:100},
    { id:3,name:'Producto 3', price:440},

  ]
    
  return (
    <View>
        <HeaderComponent/>
        <ProductItemComponent/>
        <ScrollView style={{marginTop:60}}>
          {
            data.map((item,index)=>{
              return (
                <view key={"item_"+index}>
                    <ProductItemComponent/>
                </view>
              )
            })
          }
        </ScrollView>
    </View>
  )
}
