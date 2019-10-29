<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoFisico extends Model
{
    protected $table = 'estados_fisicos';
}

package com.example.vrian7.factufacil.database;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

import com.example.vrian7.factufacil.Models.Enterprice;
import com.example.vrian7.factufacil.Models.Product;
import com.example.vrian7.factufacil.Models.User;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;

/**
 * Created by Vrian7 on 24/06/2016.
 */

public class DataBase extends SQLiteOpenHelper{
    SimpleDateFormat sdf;
    public DataBase(Context context ){
        super(context,"fitlabel.sqlite",null,1);
        Log.v("fitlabel","db created");
        sdf = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL(queryUsers());
        db.execSQL(queryProduct());
        db.execSQL(queryEnterprice());
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL(dropUsers());
        db.execSQL(dropProducts());
        db.execSQL(dropEnterprices());
    }
    private String queryUsers(){
        String query;
        query = "CREATE TABLE users(" +
                "id INTEGER PRIMARY KEY, " +
                "name TEXT, " +
                "password TEXT, " +
                "nombre TEXT," +
                "apellidos TEXT," +
                "fecha_nacimiento TEXT," +
                "email TEXT)";
        return query;
    }
    private String queryMacronutrientes(){
        String query;
        query = "CREATE TABLE macronutrientes (" +
                "id INTEGER PRIMARY KEY," +
                "nombre TEXT," +
                "peso TEXT," +
                "calorias TEXT," +
                "proteinas TEXT," +
                "carbohidratos TEXT," +
                "grasas TEXT)";
        return query;
    }
    private String queryAlimentos(){
        String query;
        query = "CREATE TABLE alimentos (" +
                "id INTEGER PRIMARY KEY," +
                "nombre TEXT," +
                "descripcion TEXT," +
                "macronutriente_id TEXT," +
                "marca TEXT)";
        return query;
    }
    private String queryEstadosFisicos(){
        String query;
        query = "CREATE TABLE estados_fisicos (" +
                "id INTEGER PRIMARY KEY," +
                "peso TEXT," +
                "estatura TEXT," +
                "imc TEXT," +
                "genero TEXT," +
                "edad TEXT," +
                "actividad_id TEXT," +
                "peso_objetio TEXT," +
                "peso_ideal TEXT)";
        return query;
    }
    private String queryActividades(){
        String query;
        query = "CREATE TABLE actividades (" +
                "id INTEGER PRIMARY KEY," +
                "nombre TEXT," +
                "descripcion TEXT," +
                "factor TEXT)";
        return query;
    }
    private String queryAvances(){
        String query;
        query = "CREATE TABLE avances (" +
                "id INTEGER PRIMARY KEY," +
                "user_id TEXT," +
                "peso_inicial TEXT," +
                "peso_actual TEXT)";
        return query;
    }
    private String queryLogros(){
        String query;
        query = "CREATE TABLE logros (" +
                "id INTEGER PRIMARY KEY," +
                "user_id TEXT," +
                "peso_objetivo TEXT," +
                "peso_actual TEXT," +
                "logrado TEXT)";
        return query;
    }
    private String queryRecomendaciones(){
        String query;
        query = "CREATE TABLE recomendacinoes (" +
                "id INTEGER PRIMARY KEY," +
                "aliment_id TEXT," +
                "calorias TEXT)";
        return query;
    }
    private String dropUsers(){
        String query = "DROP TABLE IF EXISTS users";
        return query;
    }
    private String dropProducts(){
        String query = "DROP TABLE IF EXISTS products";
        return query;
    }
    private String dropEnterprices(){
        String query = "DROP TABLE IF EXISTS enterprices";
        return query;
    }
    public void storeUser(int ent, String nom, String use, String pas){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues val = new ContentValues();
        String currentDateandTime = sdf.format(new Date());
        val.put("enterprice_id",ent);
        val.put("name",nom);
        val.put("username",use);
        val.put("password",pas);
        val.put("created_at",currentDateandTime);
        val.put("deleted_at","");
        val.put("last_login",currentDateandTime);
        db.insert("users",null,val);
        db.close();
    }
    public void storeProduct(Product product){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues val = new ContentValues();
        String currentDateandTime = sdf.format(new Date());
        val.put("enterprice_id",product.getEnterpriceId());
        val.put("name",product.getName());
        val.put("description",product.getDescription());
        val.put("code",product.getCode());
        val.put("quantity",product.getQuantity()+"");
        val.put("price",product.getPrice()+"");
        val.put("stock",Math.round(product.getStock())+"");
        val.put("created_at",currentDateandTime);
        val.put("deleted_at","");
        val.put("updated_at",currentDateandTime);
        db.insert("products",null,val);
        db.close();

    }
    public void storeEnterprice(Enterprice enterprice){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues val = new ContentValues();
        String currentDateandTime = sdf.format(new Date());
        val.put("branch_id",enterprice.getBranchId());
        val.put("name",enterprice.getName());
        val.put("branch",enterprice.getBranch());
        val.put("owner",enterprice.getOwner());
        val.put("address",enterprice.getAddress());
        val.put("phone",enterprice.getPhone());
        val.put("city",enterprice.getCity());
        val.put("country",enterprice.getCountry());
        val.put("title",enterprice.getTitle());
        val.put("nit",enterprice.getNit());
        val.put("authorization",enterprice.getAuthorization());
        val.put("dead_line",enterprice.getDeadLine());
        val.put("law",enterprice.getLaw());
        val.put("activity",enterprice.getActivity());
        val.put("created_at",currentDateandTime);
        val.put("deleted_at","");
        val.put("updated_at",currentDateandTime);
        db.insert("enterprices",null,val);
        db.close();
    }
    public User getUser(){
        SQLiteDatabase db =  this.getWritableDatabase();
        User user = new User();
        user.setName("");
        Cursor c = db.rawQuery("SELECT * FROM users where deleted_at ="+"\"\"",null);
        if(c.moveToFirst()){
            do{
                user.setId(c.getInt(0));
                user.setEnterpriceId(c.getInt(1));
                user.setName(c.getString(2));
                user.setUsername(c.getString(3));
                user.setPassword(c.getString(4));
                user.setDomain(c.getString(5));
//                Log.v("Brian","dato1: "+c.getString(0));
//                Log.v("Brian","dato2: "+c.getString(1));
//                Log.v("Brian","dato3: "+c.getString(2));
//                Log.v("Brian","dato4: "+c.getString(3));
//                Log.v("Brian","dato5: "+c.getString(4));
//                Log.v("Brian","dato7: "+c.getString(6));
//                Log.v("Brian","dato8: "+c.getString(7));
            }while (c.moveToNext());
        }
        return user;
    }
    public ArrayList<Product> getProducts(){
        ArrayList<Product> products = new ArrayList<Product>();
        Product product;
        SQLiteDatabase db = this.getWritableDatabase();
        Log.v("Brian","PRODUCTS");
        Cursor c = db.rawQuery("SELECT * FROM products where deleted_at ="+"\"\"",null);
        if(c.moveToFirst()){
            do{
                product =new Product();
                product.setId(c.getInt(0));
                product.setEnterpriceId(c.getInt(1));
                product.setName(c.getString(2));
                product.setDescription(c.getString(3));
                product.setCode(c.getString(4));
                product.setQuantity(Integer.parseInt(c.getString(5)));
                product.setPrice(Float.parseFloat(c.getString(6)));
                product.setStock(Integer.parseInt(c.getString(7)));
                products.add(product);
                Log.v("Brian","id: "+product.getId());
                Log.v("Brian","name: "+product.getName());
            }while (c.moveToNext());
        }
        return products;
    }
    public Enterprice getEnterprice(){
        Enterprice enterprice = new Enterprice();
        SQLiteDatabase db = this.getWritableDatabase();
        Cursor c = db.rawQuery("SELECT * FROM enterprices where deleted_at ="+"\"\"",null);
        Log.v("Brian","ENTERPRICES");
        if(c.moveToFirst()){
            do{
                enterprice.setId(c.getInt(0));
                enterprice.setBranchId(c.getInt(1));
                enterprice.setName(c.getString(2));
                enterprice.setBranch(c.getString(3));
                enterprice.setOwner(c.getString(4));
                enterprice.setAddress(c.getString(5));
                enterprice.setPhone(c.getString(6));
                enterprice.setCity(c.getString(7));
                enterprice.setCountry(c.getString(8));
                enterprice.setTitle(c.getString(9));
                enterprice.setNit(c.getString(10));
                enterprice.setAuthorization(c.getString(11));
                enterprice.setDeadLine(c.getString(12));
                enterprice.setLaw(c.getString(13));
                enterprice.setActivity(c.getString(14));
                Log.v("Brian","id: "+enterprice.getId());
                Log.v("Brian","id: "+enterprice.getName());
            }while (c.moveToNext());
        }
        return enterprice;
    }
    public void deleteUser(int id){
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues val = new ContentValues();
        SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
        String currentDateandTime = sdf.format(new Date());
        val.put("deleted_at",currentDateandTime);
        db.update("users",val,"id="+id,null);
        db.close();
    }
//    public void deleteProducst(int id){
//        SQLiteDatabase db = this.getWritableDatabase();
//        ContentValues val = new ContentValues();
//        SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
//        String currentDateandTime = sdf.format(new Date());
//        val.put("deleted_at",currentDateandTime);
//        db.update("users",val,"id="+id,null);
//        db.close();
//    }

private String dropUsers(){
    String query = "DROP TABLE IF EXISTS users";
    return query;
}
private String dropMacronutrientes(){
    String query = "DROP TABLE IF EXISTS macronutrientes";
    return query;
}
private String dropAlimentos(){
    String query = "DROP TABLE IF EXISTS alimentos";
    return query;
}
private String dropEstadosFisicos(){
    String query = "DROP TABLE IF EXISTS estadosFisicos";
    return query;
}
private String dropActividades(){
    String query = "DROP TABLE IF EXISTS actividades";
    return query;
}
private String dropAvances(){
    String query = "DROP TABLE IF EXISTS avances";
    return query;
}
private String dropLogros(){
    String query = "DROP TABLE IF EXISTS logros";
    return query;
}
private String dropRecomendaciones(){
    String query = "DROP TABLE IF EXISTS recomendaciones";
    return query;
}

public void stroreUsers(Users queryUsers){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreMacronutrientes(Macronutrientes queryMacronutrientes){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreAlimentos(Alimentos queryAlimentos){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreEstadosFisicos(EstadosFisicos queryEstadosFisicos){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreActividades(Actividades queryActividades){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreAvances(Avances queryAvances){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreLogros(Logros queryLogros){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
public void stroreRecomendaciones(Recomendaciones queryRecomendaciones){
    SQLiteDatabase db = this.getWritableDatabase();
    ContentValues val =  new ContentValues();
    db.insert("", null, val);
    db.close();
}
}
