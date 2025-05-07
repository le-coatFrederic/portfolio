package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface CvRepository {
    public List<Cv> findAll();
    public List<Cv> findByUser(Identity userId);
    public List<Cv> findByUserId(UUID userId);
    public List<Cv> findByTitle(String title);
    public List<Cv> findByCompany(Company company);
    public List<Cv> findByCompanyId(UUID companyId);
    public Cv save(Cv cv);
    public Cv findById(UUID id);
    public void delete(Cv cv);
    public void deleteById(UUID id);
}
