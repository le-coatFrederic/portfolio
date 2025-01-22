package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface CompanyRepository {
    public Company findByCompanyId(UUID companyId);
    public Company save(Company company);
    public void delete(Company company);
    public void delete(UUID companyId);
    public List<Company> findAll();
    public List<Company> findByCompanyName(String companyName);
}
