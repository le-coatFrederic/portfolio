package online.fredinfo.portfolio.domain.entities;

import java.util.UUID;

public class Address {
    private final UUID id;
    private String number;
    private String street;
    private String city;
    private String state;
    private String country;
    public Address(String number, String street, String city, String state, String country) {
        this.id = UUID.randomUUID();
        this.number = number;
        this.street = street;
        this.city = city;
        this.state = state;
        this.country = country;
    }


    public UUID getId() {
        return id;
    }

    public String getNumber() {
        return number;
    }

    public void setNumber(String number) {
        if (Integer.getInteger(number) > 0) {
            this.number = number;
        }
    }

    public String getStreet() {
        return street;
    }

    public void setStreet(String street) {
        this.street = street;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getState() {
        return state;
    }

    public void setState(String state) {
        this.state = state;
    }

    public String getCountry() {
        return country;
    }

    public void setCountry(String country) {
        this.country = country;
    }
}
