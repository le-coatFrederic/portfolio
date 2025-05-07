package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface AddressRepository {
    public Address save(Address address);
    public void delete(Address address);
    public void deleteById(UUID id);
    public Address findById(UUID id);
    public List<Address> findAll();
    public List<Address> findByCity(String city);
    public List<Address> findByCountry(String country);
    public List<Address> findByState(String state);
    public List<Address> findAllOrderByCountry();
    public List<Address> findAllOrderByCity();
    public List<Address> findAllOrderByState();
}
